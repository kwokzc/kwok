<?php
namespace app\index\model;

use think\Model;
use think\DB;
class Fund extends Model
{
	// 用于获取基金网格计划中买的记录
	public function Db_fund_grid_buy()
	{
		return Db::table('fund_grid_buy')
				->where('sell_id','=',0)
				->select();
	}



	// 用于获取基金网格计划中买的记录中的股市地区和基金代码，返回的数据为去重后数据
	// 用于通过api获取所需的场内基金价格
	public function DB_fund_code()
	{
		// 获取去重后的基金代码
		$tmp = Db::table('fund_grid_buy')->distinct(true)->field(['fund_code','gsdq'])->select();
		// SELECT DISTINCT `gsdq`,`fund_code` FROM fund_grid_buy
		
		// 拼接地区和代码
		$res = array();
		for ($i=0; $i < count($tmp); $i++) { 
			array_push($res, $tmp[$i]['gsdq'].$tmp[$i]['fund_code']);
		}

		return $res;

		// array(2) {
		//   [0]=>
		//   string(8) "sh512880"
		//   [1]=>
		//   string(8) "sh510500"
		// }

	}


	public function DB_fund_grid_end()
	{
		return Db::table('fund_grid_buy')
			->alias('b')
			->join(['fund_grid_sell'=>'s'],'b.sell_id=s.sellid')
			->select();
	}
}