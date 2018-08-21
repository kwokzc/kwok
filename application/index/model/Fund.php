<?php
namespace app\index\model;

use think\Model;
use think\DB;
class Fund extends Model
{
	// 用于获取基金网格计划中买的记录
	public function Db_fund_buy_nosell()
	{
		// 只获取没有卖出的
		return Db::table('fund_grid_buy')
				->alias('b')
				->where('sell_id','=',0)
				->join(['fund_info'=>'i'],'b.fund_id=i.fund_id')
				->select();
	}



	// 获取基金网格计划中所有自选基金(table: 'fund_info') 返回 数据库id,代码,股市地区
	// 一般用于返回给方法 查询最新价格
	public function DB_fund_info_all()
	{
		// 获取指定字段
		$tmp = Db::table('fund_info')->distinct(true)->field(['fund_id','fund_code','fund_gsdq'])->select();

		// 重组数组 返回为键值对二位数组
		$res = array();
		foreach ($tmp as $key => $value) {
			$res[$value['fund_id']] = $value['fund_gsdq'].$value['fund_code'];
		}

		return $res;

		//array(2) {
		//	[0] => array(1) {
		//		[1] => string(8) "sh510500"			//[1]为fund_info表中的fund_id
		//	}
		//	[1] => array(1) {
		//    	[2] => string(8) "sh512880"			//[2]为fund_info表中的fund_id
		//    }
		//}

	}


	public function DB_fund_grid_end()
	{
		return Db::table('fund_grid_buy')
			->alias('b')
			->join(['fund_grid_sell'=>'s'],'b.sell_id=s.sell_id')
			->join(['fund_info'=>'i'],'b.fund_id=i.fund_id')
			->select();
	}


	// 用于插入自选基金数据
	public function DB_fund_add($data)
	{
		if (Db::table('fund_info')->where('fund_code',$data['fund_code'])->find()) {
			return 0;
		}else{
			return Db::table('fund_info')->insert($data);
		}
	}


	// 用于查询自选基金 返回给网格买入时选择基金
	public function DB_fund_info_buy()
	{
		// return Db::table('fund_info')->select();
		return Db::table('fund_info')->column('fund_name','fund_id');
	}
}