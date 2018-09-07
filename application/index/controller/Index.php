<?php
namespace app\index\controller;
use think\Config;
use app\index\model\Fund;
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
    
    public function fundgrid()
    {
    	// 实例化基金DB操作
    	$fund_db = new Fund;

    	// 交易中
    	
    	// 获取自选基金的最新价格
		$fund_grid_info_all_arr = xlcj_today_fund_info_array($fund_db->DB_fund_info_all());

		// 获取基金网格交易暂未卖出的交易 sell_id = 0
		$fund_grid_buy_nosell_arr = $fund_db->Db_fund_buy_nosell();
		// var_dump($fund_grid_buy_nosell_arr);
		// 组合数据为输入
		$data = array();  

        foreach ($fund_grid_buy_nosell_arr as $key => $value) {
            
            $tmp = array(
                    'mrid' => $value['buy_id'],                                                             //买入ID  1
                    'jjmc' => $value['fund_name'].'('.$value['fund_gsdq'].$value['fund_code'].')',          //基金名称 500ETF(sh510500)
                    'cbdj' => $value['buy_dj'],                                                             //成本单价 5.146
                    'jysl' => $value['buy_sl'],                                                             //交易数量 100
                    'cjje' => $value['buy_je'],                                                             //成本金额 514.6
                    'jysj' => date("Y-m-d",strtotime($value['buy_time'])),                                  //交易时间 2018-08-01
                    'wgfd' => $value['grid_fudu'],                                                          //网格幅度 3
                    'jjxj' => $fund_grid_info_all_arr[$value['fund_id']],                                   //基金现价 5.338
                    'bcdj' => round($value['buy_dj']*((100-$value['grid_fudu'])/100),3),                    //补仓应达到的价格
                    'mcdj' => round($value['buy_dj']*(1+$value['grid_fudu']/100),3),                        //卖出应达到的价格
                    'zdfd' => round(($fund_grid_info_all_arr[$value['fund_id']]/$value['buy_dj']-1)*100,3), //涨跌幅度 %3   
                    'ykje' => round($fund_grid_info_all_arr[$value['fund_id']]*$value['buy_sl']-$value['buy_je']-$value['buy_sxf'],3), //盈亏金额 16.54   
                );
            $data[]=$tmp;
        }
		// var_dump($data);
    	$this->assign('data1',$data);

    	// 交易完成
    	
    	// 获取数据库
    	$fund_grid_end = $fund_db->DB_fund_grid_end();
        // var_dump($fund_grid_end);


		// 组合数据
		$data = array();

        foreach ($fund_grid_end as $key => $value) {
            
            $tmp = array(
                    'mcid' => $value['sell_id'],                                                             //卖出ID  1
                    'jjmc' => $value['fund_name'].'('.$value['fund_gsdq'].$value['fund_code'].')',          //基金名称 500ETF(sh510500)
                    'cbdj' => $value['buy_dj'],                                                             //成本单价 5.146
                    'mcdj' => $value['sell_mcdj'],                                                          //卖出单价 5.300
                    'cbje' => $value['buy_je'],                                                             //成本金额 514.6
                    'mcje' => $value['sell_mcje'],                                                          //卖出金额 530.0
                    'wcsh' => date("Y-m-d",strtotime($value['sell_time'])),                                 //完成时间 2018-08-01
                    'wgfd' => $value['grid_fudu'],                                                          //网格幅度 3%
                    'ykfd' => (round(($value['sell_mcje']-$value['buy_sxf']-$value['sell_sxf'])/$value['buy_je'],3)-1)*100, //盈亏幅度 3.3%
                    'ykje' => $value['sell_mcje']-$value['buy_je']-$value['buy_sxf']-$value['sell_sxf'],    //盈亏金额 5.338
                );
            $data[]=$tmp;
        }
		// var_dump($data);
    	$this->assign('data2',$data);

        // 传入基金信息，用于展示在 买入 功能，选择基金
        $this->assign('fund_info',$fund_db->Db_fund_info_buy());
        // 传入未卖出交易，用于展示在 卖出 功能，选择对应的买入信息
    	$this->assign('fund_info_sell',$fund_db->DB_fund_info_sell());

    	return $this->fetch();
    	
    }
    
    public function test()
    {
    	$fund_db = new Fund;
    	var_dump($fund_db->DB_fund_info_sell());
    }



    // 用于处理fundgird页面中添加基金的表单数据
    // 采用ajax添加数据库
    public function fund_add()
    {
    	$db = new Fund;
    	// 获取POST数据
		$fund_code = $_POST['fund_code'];
		$fund_name = $_POST['fund_name'];
		$fund_gsdq = $_POST['fund_gsdq'];
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

        // 封装数据
        $data = [
        	'fund_code' => $fund_code,
        	'fund_name' => $fund_name,
        	'fund_gsdq' => $fund_gsdq,
        	'fund_api' => $fund_api,
        ];

        // 成功返回 1 失败返回0
        if ($db->DB_fund_add($data)) {
        	return show(1,'添加成功！');
        }else{
        	return show(0,'添加失败！');
        }
    }

    public function fund_info()
    {
    	$db = new Fund;
    	$res = $db->Db_fund_info_buy();
    	if ($res) {
    		return $res;
    	}else{
    		return 0;
    	}
    }

    // 基金网格计划 买入
    public function fund_buy()
    {
        // 封装数组
        $data = [
            'fund_id'   => $_POST['fund_id'],
            'buy_dj'    => $_POST['buy_dj'],
            'buy_sl'    => $_POST['buy_sl'],
            'buy_je'    => round($_POST['buy_dj']*$_POST['buy_sl'],3),
            'buy_time'  => date("Y-m-d H:i:s",strtotime($_POST['buy_time'])),
            'buy_sxf'   => $_POST['buy_sxf'],
            'grid_fudu' => $_POST['grid_fudu'],
        ];

        // return show(1,'debug',$data);

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



        // return show(1,'debug',$data);

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
