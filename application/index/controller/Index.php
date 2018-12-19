<?php
namespace app\index\controller;
use think\Config;

// 引入基金相关模型
use app\index\model\Fund;
// 引入Tushare模型
use app\index\model\Tushare;

class Index extends \think\Controller
{
    public function index()
    {
    	return $this->fetch('index');
    }
    
    public function http404()
    {
    	return $this->fetch('404');
    }
    
    public function http500()
    {
    	return $this->fetch('500');
    }
    
    public function basic_table()
    {
    	return $this->fetch('basic-table');
    }
    
    public function blank()
    {
    	return $this->fetch('blank');
    }
    
    public function buttons()
    {
    	return $this->fetch('buttons');
    }
    
    public function calendar()
    {
    	return $this->fetch('calendar');
    }
    
    public function changelogs()
    {
    	return $this->fetch('changelogs');
    }
    
    public function charts()
    {
    	return $this->fetch('charts');
    }
    
    public function contact()
    {
    	return $this->fetch('contact');
    }
    
    public function data_table()
    {
    	return $this->fetch('data-table');
    }
    
    public function forgot_password()
    {
    	return $this->fetch('forgot-password');
    }
    
    public function form_elements()
    {
    	return $this->fetch('form-elements');
    }
    
    public function grid()
    {
    	return $this->fetch('grid');
    }
    
    public function helper_classes()
    {
    	return $this->fetch('helper-classes');
    }
    
    public function icons()
    {
    	return $this->fetch('icons');
    }
    
    public function invoice()
    {
    	return $this->fetch('invoice');
    }
    
    public function layouts()
    {
    	return $this->fetch('layouts');
    }
    
    public function lockscreen()
    {
    	return $this->fetch('lockscreen');
    }
    
    public function login()
    {
    	return $this->fetch('login');
    }
    
    public function mailbox()
    {
    	return $this->fetch('mailbox');
    }
    
    public function maps()
    {
    	return $this->fetch('maps');
    }
    
    public function modal_boxes()
    {
    	return $this->fetch('modal-boxes');
    }
    
    public function notifications()
    {
    	return $this->fetch('notifications');
    }
    
    public function others()
    {
    	return $this->fetch('others');
    }
    
    public function panels()
    {
    	return $this->fetch('panels');
    }
    
    public function progress_bars()
    {
    	return $this->fetch('progress-bars');
    }
    
    public function register()
    {
    	return $this->fetch('register');
    }
    
    public function social_profile()
    {
    	return $this->fetch('social-profile');
    }
    
    public function tabs()
    {
    	return $this->fetch('tabs');
    }
    
    public function text_editors()
    {
    	return $this->fetch('text-editors');
    }
    
    public function typography()
    {
    	return $this->fetch('typography');
    }
    
    public function widgets()
    {
    	return $this->fetch('widgets');
    }
    
    public function tusharetest()
    {
        $tushare = new Tushare;
        $data=array('api_name'=>'index_daily','params'=>['ts_code'=>'000001.SH',],'fields'=>[]);
        $res = $tushare->tushareHttpApi($data);
        // var_dump($res);
        
        $this->assign('data',$res);

        // var_dump($data);
        return $this->fetch();

    }
    
    public function fundgrid()
    {
    	// 实例化基金DB操作
    	$fund_db = new Fund;

    	// 持仓交易中
    	
    	// 获取自选基金的最新价格
		$fund_grid_info_all_arr = xlcj_today_fund_info_array($fund_db->DB_fund_info_all());

		// 获取基金网格交易暂未卖出的交易 sell_id = 0
		$fund_grid_buy_nosell_arr = $fund_db->Db_fund_buy_nosell();

        // 循环 记录持仓信息
        foreach ($fund_grid_buy_nosell_arr as $key => $value) {

            // 持仓中网格信息数组
            $position[] = array(

                    // 买入ID 对应fund_gruid_buy表中的id -> 1
                    'mrid' => $value['buy_id'], 

                    // 基金名称 对应fund_info表中的fund_name+fund_code -> 500ETF(sh510500)
                    'jjmc' => $value['fund_name'].'('.$value['fund_gsdq'].$value['fund_code'].')',

                    // 成本单价 对应fund_grid_buy表中的buy_dj -> 5.146
                    'cbdj' => round($value['buy_dj'],3),

                    // 交易数量 对应fund_grid_buy表中的buy_sl -> 100
                    'jysl' => $value['buy_sl'],

                    // 成交金额 对应fund_grid_buy表中的buy_je -> 514.6
                    'cjje' => round($value['buy_je'],3),

                    // 交易时间 对应fund_grid_buy表中的buy_time -> 2018-08-01
                    'jysj' => date("Y-m-d",strtotime($value['buy_time'])),

                    // 网格幅度 对应fund_grid_buy表中的buy_fudu -> 3
                    'wgfd' => $value['grid_fudu'],

                    // 基金现价 从获取自选基金的最新价格中获取当前fund_id的当前价格 -> 5.338
                    'jjxj' => $fund_grid_info_all_arr[$value['fund_id']],

                    // 补仓单价 计算买入单价*(100-幅度)/100 取三位小数 (未计算手续费损耗)
                    'bcdj' => round($value['buy_dj']*((100-$value['grid_fudu'])/100),3),

                    // 卖出单价 计算买入价格*(100+幅度)/100 取三位小数 (未计算手续费损耗)
                    'mcdj' => round($value['buy_dj']*(1+$value['grid_fudu']/100),3),

                    // 涨跌幅度 (基金现价/买入单价-1)*100得出百分数 取三位小数 得出当前涨跌幅度
                    'zdfd' => round(($fund_grid_info_all_arr[$value['fund_id']]/$value['buy_dj']-1)*100,3),

                    // 盈亏金额 (基金现价*买入数量)-买入金额-手续费 取三位小数 得出当前盈亏金额
                    'ykje' => round($fund_grid_info_all_arr[$value['fund_id']]*$value['buy_sl']-$value['buy_je']-$value['buy_sxf'],3), 
                );
        }

		// var_dump($position);

        // 将持仓中的网格信息赋值到前端模板
    	$this->assign('position',$position);




    	// 交易完成
    	
    	// 从数据库获取已完成的网格
    	$fund_grid_end = $fund_db->DB_fund_grid_end();

        // 循环 记录已完成网格信息
        foreach ($fund_grid_end as $key => $value) {
            
            // 已完成网格信息数组
            $completed[] = array(

                    // 卖出ID 对应fund_gruid_sell表中的id -> 1
                    'mcid' => $value['sell_id'],

                    // 基金名称 对应fund_info表中的fund_name+fund_code -> 500ETF(sh510500)
                    'jjmc' => $value['fund_name'].'('.$value['fund_gsdq'].$value['fund_code'].')',

                    // 成本单价 对应fund_grid_buy表中的buy_dj -> 5.146
                    'cbdj' => round($value['buy_dj'],3),

                    // 卖出单价 对应fund_grid_sell表中的sell_mcdj -> 5.300
                    'mcdj' => round($value['sell_mcdj'],3),

                    // 成交金额 对应fund_grid_buy表中的buy_je -> 514.6
                    'cbje' => round($value['buy_je'],3),

                    // 卖出金额 对应fund_grid_sell表中的sell_mcje -> 530.0
                    'mcje' => round($value['sell_mcje'],3),

                    // 完成时间 对应fund_grid_sell表中的sell_time -> 2018-08-01
                    'wcsh' => date("Y-m-d",strtotime($value['sell_time'])),

                    // 网格幅度 对应fund_grid_buy表中的buy_fudu -> 3
                    'wgfd' => $value['grid_fudu'],

                    // 盈亏幅度 (卖出金额-买卖手续费)/买入金额 去三位小数 -1 乘以100百分化 -> 3.3
                    'ykfd' => (round(($value['sell_mcje']-$value['buy_sxf']-$value['sell_sxf'])/$value['buy_je'],3)-1)*100,

                    // 盈亏金额 卖出金额-买入金额-买卖手续费 -> 5.338
                    'ykje' => round($value['sell_mcje']-$value['buy_je']-$value['buy_sxf']-$value['sell_sxf'],3),
                );
        }

		// var_dump($completed);
        
        // 将已完成的网格信息赋值到前端模板
    	$this->assign('completed',$completed);

        // 将自选基金信息赋值到前端模板，用于在 买入 功能时选择基金
        $this->assign('fund_info',$fund_db->Db_fund_info_buy());

        // 将未完成网格基金信息赋值到前端模板，用于在 卖出 功能时选择对应的买入信息
    	$this->assign('fund_info_sell',$fund_db->DB_fund_info_sell());

    	return $this->fetch();
    	
    }
    
    // 用于处理fundgird页面中 添加 自选基金 的表单数据
    // 采用ajax添加数据库
    public function fund_add()
    {
    	$db = new Fund;

    	// 获取POST数据
        
        // 基金代码
		$fund_code = $_POST['fund_code'];

        // 基金名称
		$fund_name = $_POST['fund_name'];

        // 股市地区
        // sh:上海、sz:深圳
		$fund_gsdq = $_POST['fund_gsdq'];

        // api查询接口
        // xlcj:新浪财经
		$fund_api  = $_POST['fund_api'];

		// 检查不能为空
        if (!trim($fund_code)) {
            return show(0,'基金代码不能为空！');
        }
        if (!trim($fund_name)) {
            return show(0,'基金名称不能为空！');
        }
        if (!trim($fund_gsdq)) {
            return show(0,'基金地区不能为空！');
        }
        if (!trim($fund_api)) {
            return show(0,'基金接口不能为空！');
        }

        // 封装数据为数组
        $fund_add = [
        	'fund_code' => $fund_code,
        	'fund_name' => $fund_name,
        	'fund_gsdq' => $fund_gsdq,
        	'fund_api' => $fund_api,
        ];

        // 成功返回 1 失败返回0
        if ($db->DB_fund_add($fund_add)) {
        	return show(1,'添加成功！');
        }else{
        	return show(0,'添加失败！');
        }
    }

    // 基金网格计划 买入
    public function fund_buy()
    {
        // 封装前端传入的POST买入信息为数组
        $data = [
            'fund_id'   => $_POST['fund_id'],
            'buy_dj'    => $_POST['buy_dj'],
            'buy_sl'    => $_POST['buy_sl'],
            'buy_je'    => round($_POST['buy_dj']*$_POST['buy_sl'],3),
            'buy_time'  => date("Y-m-d H:i:s",strtotime($_POST['buy_time'])),
            'buy_sxf'   => $_POST['buy_sxf'],
            'grid_fudu' => $_POST['grid_fudu'],
        ];


        // 写入数据库
        
        // 实例化
        $db = new Fund;
        // 成功返回 1 失败返回0
        if ($db->DB_fund_grid_buy($data)) {
            return show(1,'添加成功！');
        }else{
            return show(0,'添加失败！');
        }
    }

    // 基金网格计划 卖出
    public function fund_sell()
    {
        // 封装数组
        $data = [
            'buy_id'     => $_POST['buy_id'],
            'sell_mcdj'  => $_POST['sell_mcdj'],
            'sell_mcsl'  => $_POST['sell_mcsl'],
            'sell_mcje'  => round($_POST['sell_mcdj']*$_POST['sell_mcsl'],3),
            'sell_time'  => date("Y-m-d H:i:s",strtotime($_POST['sell_time'])),
            'sell_sxf'   => $_POST['sell_sxf'],
            'sell_ykfd'  => 0,
            'sell_ykje'  => 0,
        ];




        // 写入数据库
        
        // 实例化
        $db = new Fund;
        // // 成功返回 1 失败返回0
        if ($db->DB_fund_grid_sell($data)) {
            return show(1,'添加成功！');
        }else{
            return show(0,'添加失败！');
        }
    }

}
