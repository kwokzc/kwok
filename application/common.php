<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件



/**
 * 修改扩展配置文件
 * @param array  $arr  需要更新或添加的配置
 * @param string $file 配置文件名(不需要后辍)
 * @return bool
 */
function extraconfig($arr = [], $file = 'extraconfig')
{
    if (is_array($arr)) {
        $filename = $file . EXT;
 
        $filepath = APP_PATH . 'extra/' . $filename;
        if (!file_exists($filepath)) {
            $conf = "<?php return [];";
            file_put_contents($filepath, $conf);
        }
 
        $conf = include $filepath;
        foreach ($arr as $key => $value) {
            $conf[$key] = $value;
        }
 
        $time = date('Y/m/d H:i:s');
        $str = "<?php\r\n/**\r\n * 由extraconfig函数建立.\r\n * 更新时间：$time\r\n */\r\nreturn [\r\n";
        foreach ($conf as $key => $value) {
            $str .= "\t'$key' => '$value',";
            $str .= "\r\n";
        }
        $str .= '];';
 
        file_put_contents($filepath, $str);
        
        return true;
    } else {
        return false;
    }
}




/**
 * 获取天天基金当天基金信息
 * @param int $fund_code	(基金代码)
 * @return array 			(array[])
 */
function ttjj_today_fund_info($fund_code)
{
	// 获取url后获取内容
	// 获取到的内容为jsonp格式 需要变为json格式转换为array
	
	$fund_info_api_url = 'http://fundgz.1234567.com.cn/js/'.$fund_code.'.js';	//生成url
	$return_fund_info_jsonp = file_get_contents($fund_info_api_url);			//获取内容
    $return_fund_info_json = substr($return_fund_info_jsonp,8,-2);				//jsonp转json
	return (array)json_decode($return_fund_info_json);							//return json->array
}






/**
 * 获取新浪财经当天基金信息
 * @param int $fund_code	(基金代码)
 * @return array 			(array[])
 */
function xlcj_today_fund_info($fund_code)
{
	// 获取url后获取内容
	// 获取到的内容为jsonp格式 需要变为json格式转换为array
	
	$fund_info_api_url = 'http://hq.sinajs.cn/list=s_'.$fund_code;	//生成url
	$return_fund_info_jsonp = file_get_contents($fund_info_api_url);			//获取内容
	// return $return_fund_info_jsonp;
    $return_fund_info_json = substr($return_fund_info_jsonp,23,-3);				//jsonp转json
    $return_fund_info_json = explode(',', $return_fund_info_json);
	// return (array)json_decode($return_fund_info_json);							//return json->array
	return $return_fund_info_json;
}



/**
 * 获取新浪财经当天基金信息	【数组版】
 * @param array $fund_code	(基金代码)
 * @return array 			(array[])
 */
function xlcj_today_fund_info_array($fund_code)
{
	$res = array();
	// 传入数组用for循环
	for ($i=0; $i < count($fund_code); $i++) { 
		// 获取url后获取内容
		// 去除无用信息后 分隔为数组
		$fund_info_api_url = 'http://hq.sinajs.cn/list=s_'.$fund_code[$i];	//生成url
		$return_fund_info_html = file_get_contents($fund_info_api_url);	//获取内容
    	$return_fund_info = substr($return_fund_info_html,23,-3);		//jsonp转json
    	$return_fund_info_array = explode(',', $return_fund_info);		//分隔为数组
    	$res[$fund_code[$i]] = $return_fund_info_array['1'];			//组合为数组
	}
	return $res;

	// array(2) {
	//   [0]=>
	//   array(1) {
	//     ["sh510500"]=>
	//     string(5) "5.338"
	//   }
	//   [1]=>
	//   array(1) {
	//     ["sh512880"]=>
	//     string(5) "0.724"
	//   }
	// }



}