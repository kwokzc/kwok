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
 * 公共函数
 */

use think\facade\Env;

/**
 * 用于后端返回给前端JS数据的函数，注意前端需要Json解码
 * @param $status int 状态码:1为成功,0为失败
 * @param $message string 提示信息内容
 * @param array $data 数据数组
 */
function show($status,$message,$data=array())
{
    $result = array(
        'status' => $status,
        'message' => $message,
        'data' => $data,
    );
    exit(json_encode($result));
}


/**
 * 将数组配置写入配置文件
 * @param $arr array 要写入的数据
 * @param $filename string 文件路径是
 * @return bool|int 成功返回1,失败返回0
 */
function setconfig($arr, $filename)
{
    return file_put_contents($filename, "<?php \r\n return " . var_export($arr, true) . ";");
}