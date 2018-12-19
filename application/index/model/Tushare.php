<?php
namespace app\index\model;

use think\Model;
use think\DB;
class Tushare extends Model
{
	// Tushare的http接口 获取数据模型
	public function tushareHttpApi($data)
	{	
		// tushare API 接口 Url
		$url = 'http://api.tushare.pro';
		// Tushare token
		$data['token'] = '97a593fd952669242d1389954ac4a38e84237b6558a7093165f15c61';

		$json = json_encode($data);

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json);


		$response = curl_exec($ch);
		// $curl_info= curl_getinfo($ch);
		// 
		$res = json_decode($response,TRUE);

		curl_close($ch);
		// echo $res['data'];
		// var_dump($res["data"]["items"]);
		return $res["data"]["items"];
		// $data = json_decode($json)
	}
}