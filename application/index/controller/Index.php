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

        // <th>基金名称</th>
        // <th>成交金额</th>
        // <th>交易数量</th>
        // <th>交易时间</th>
        // <th>成本单价</th>
        // <th>实时现价</th>
        // <th>网格幅度</th>
        // <th>涨跌幅度</th>        

        foreach ($fund_grid_buy_nosell_arr as $key => $value) {
            
            $tmp = array(
                    'jjmc' => $value['fund_name'].'('.$value['fund_gsdq'].$value['fund_code'].')',          //基金名称 500ETF(sh510500)
                    'cbdj' => $value['buy_dj'],                                                             //成本单价 5.146
                    'jysl' => $value['buy_sl'],                                                             //交易数量 100
                    'cjje' => $value['buy_je'],                                                             //成本金额 514.6
                    'jysj' => date("Y-m-d",strtotime($value['buy_time'])),                                  //交易时间 2018-08-01
                    'wgfd' => $value['grid_fudu'],                                                          //网格幅度 3%
                    'jjxj' => $fund_grid_info_all_arr[$value['fund_id']],                                   //基金现价 5.338
                    'zdfd' => (round($fund_grid_info_all_arr[$value['fund_id']]/$value['buy_dj'],3)-1)*100, //涨跌幅度 %3   
                );
            $data[]=$tmp;
        }
		// var_dump($data);
    	$this->assign('data1',$data);

    	// 交易完成
    	
    	// 获取数据库
    	$fund_grid_end = $fund_db->DB_fund_grid_end();
        var_dump($fund_grid_end);
		// 组合数据
                        // <th>基金名称</th>
                        // <th>成本单价</th>
                        // <th>卖出单价</th>
                        // <th>成本金额</th>
                        // <th>卖出金额</th>
                        // <th>完成时间</th>
                        // <th>网格幅度</th>
                        // <th>盈亏幅度</th>
                        // <th>盈亏金额</th>
		$data = array();

        foreach ($fund_grid_end as $key => $value) {
            
            $tmp = array(
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

    	$this->assign('fund_info',$this->fund_info());

    	return $this->fetch();
    	
    }
    
    public function test()
    {
    	// $fund_db = new Fund;
    	var_dump($this->fund_info());
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

    public function fund_buy()
    {
    	$data = $_POST['data'];
    	var_dump($data);
    }

}
