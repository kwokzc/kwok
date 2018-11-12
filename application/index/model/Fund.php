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
		// 链表查询 join
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

	// 查询满足buy表和sell表所对应ID的数据
	// 这样的数据是网格交易已完成
	// 返回给页面展示 已完成网格
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
	// 用于查询可卖出交易 返回给网格卖出时选择对应买入
	public function DB_fund_info_sell()
	{
		// return Db::table('fund_info')->select();
		return Db::table('fund_grid_buy')
			->alias('b')
			->where('sell_id','=',0)
			->join(['fund_info'=>'i'],'b.fund_id=i.fund_id')
			->order('buy_id DESC')
			->column('fund_name','buy_id');
	}


	// 用于操作数据库写入 buy买入数据
	public function DB_fund_grid_buy($data)
	{
		// return Db::table('fund_info')->select();
		return Db::table('fund_grid_buy')
				->insert($data);
	}
	// 用于操作数据库写入 sell卖出数据
	public function DB_fund_grid_sell($data)
	{
		// 获取到对应的买入信息 用于计算盈亏幅度和金额
		$info = Db::table('fund_grid_buy')
				->where('buy_id','=',$data['buy_id'])
				->find();
		// 计算盈亏幅度和盈亏金额
		$data['sell_ykfd'] = round(($data['sell_mcje']/($info['buy_je']+$info['buy_sxf']+$data['sell_sxf'])-1)*100,3);
		$data['sell_ykje'] = $data['sell_mcje']-$info['buy_je']-$info['buy_sxf']-$data['sell_sxf'];

		// 写入sell卖出表
		if (Db::table('fund_grid_sell')->insert($data)) {
			// sell表写入成功后写buy表的sell_id字段
			// 使用getLastInsID获取最后插入的id
			$lastID = Db::table('fund_grid_sell')->getLastInsID();
			// 更新buy表的sell_id字段
			return Db::table('fund_grid_buy')
					->update(['sell_id' => $lastID,'buy_id'=>$info['buy_id']]);
		}else{
			return 0;
		}
	}
}