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
    	
    	// 获取所需的基金实时价格
		$fund_grid_buy_code = $fund_db->DB_fund_code();
		$xlcj_today_fund_info_array = xlcj_today_fund_info_array($fund_grid_buy_code);


		// 获取基金网格买入
		$fund_grid_buy_info = $fund_db->Db_fund_grid_buy();

		// 组合数据为输入
		$data = array();
		for ($i=0; $i < count($fund_grid_buy_info); $i++) { 
			$fund_quandaima = $fund_grid_buy_info[$i]['gsdq'].$fund_grid_buy_info[$i]['fund_code'];		//基金全代码：sh510500
			$tmp = array(
    				'jjmc' => $fund_grid_buy_info[$i]['fund_name'].'('.$fund_quandaima.')',					//基金名称 500ETF(sh510500)
    				'cbdj' => $fund_grid_buy_info[$i]['cbdj'],												//成本单价 5.146
    				'jysl' => $fund_grid_buy_info[$i]['jysl'],												//交易数量 100
    				'cjje' => $fund_grid_buy_info[$i]['cjje'],												//成本金额 514.6
    				'jysj' => date("Y-m-d",strtotime($fund_grid_buy_info[$i]['buy_time'])),						//交易时间 2018-08-01
    				'wgfd' => $fund_grid_buy_info[$i]['grid_fudu'],											//网格幅度 3%
    				'jjxj' => $xlcj_today_fund_info_array[$fund_quandaima],									//基金现价 5.338
    				'zdfd' => (round($xlcj_today_fund_info_array[$fund_quandaima]/$fund_grid_buy_info[$i]['cbdj'],3)-1)*100,	//涨跌幅度 %3	
				);
			$data[]=$tmp;
		}
		// var_dump($data);
    	$this->assign('data1',$data);

    	// 交易完成
    	
    	// 获取数据库
    	$fund_grid_end = $fund_db->DB_fund_grid_end();

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
		for ($i=0; $i < count($fund_grid_end); $i++) { 
			$fund_quandaima = $fund_grid_end[$i]['gsdq'].$fund_grid_end[$i]['fund_code'];		//基金全代码：sh510500
			$tmp = array(
    				'jjmc' => $fund_grid_end[$i]['fund_name'].'('.$fund_quandaima.')',					//基金名称 500ETF(sh510500)
    				'cbdj' => $fund_grid_end[$i]['cbdj'],												//成本单价 5.146
    				'mcjj' => $fund_grid_end[$i]['mcjj'],												//卖出单价 100
    				'cjje' => $fund_grid_end[$i]['cjje'],												//成本金额 514.6
    				'mcje' => $fund_grid_end[$i]['mcje'],												//卖出金额 514.6
    				'wcsh' => date("Y-m-d",strtotime($fund_grid_end[$i]['sell_time'])),					//完成时间 2018-08-01
    				'wgfd' => $fund_grid_end[$i]['grid_fudu'],											//网格幅度 3%
    				// 'ykfd' => $fund_grid_end[$i]['ykfd'],											//网格幅度 3%
    				'ykfd' => (round($fund_grid_end[$i]['mcjj']/$fund_grid_end[$i]['cbdj'],3)-1)*100,	//盈亏幅度 3%
    				// 'ykje' => $fund_grid_end[$i]['ykje'],												//盈亏金额 5.338
    				'ykje' => $fund_grid_end[$i]['mcje']-$fund_grid_end[$i]['cjje']-$fund_grid_end[$i]['buy_sxf']-$fund_grid_end[$i]['sell_sxf'],	//涨跌幅度 %3	
				);
			$data[]=$tmp;
		}
		// var_dump($data);
    	$this->assign('data2',$data);

    	return $this->fetch();
    	
    }
    
    public function test()
    {
    	$fund_db = new Fund;
    	var_dump($fund_db->DB_fund_grid_end());
    }

}
