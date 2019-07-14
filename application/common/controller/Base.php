<?php
/**
 * 基础控制器
 * 必须继承自think/Controller.php
 */

namespace app\common\controller;


use think\Controller;

//引入静态Session
use think\facade\Session;
use think\facade\Request;

class Base extends Controller
{
    /**
     * 初始化方法
     * 创建常量、公共方法
     * 在所有方法之前被调用
     */
    protected function initialize()
    {

    }

    /**
     * 用于在登录、注册、找回密码页面前判断是否登录
     * @param string $msg 用于传入提示消息，有默认值
     */
    public function isLogin($msg='当前已经登陆,请勿重复登录')
    {
        if (Session::has('user_name'))
        {
            return $this->error($msg);
        }
    }

    public function noLogin($msg='目前未登录,请先登录',$url="user/login")
    {
        if (!Session::has('user_name'))
        {
            return $this->error($msg,$url);
        }
    }
}