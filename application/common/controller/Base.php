<?php
/**
 * 基础控制器
 * 必须继承自think/Controller.php
 */

namespace app\common\controller;


use think\Controller;

//引入静态Session类
use think\facade\Session;

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
     * @param string $msg 用于传入提示消息，默认提示请勿重复登录
     */
    public function notLoggedIn($msg='当前已经登陆,请勿重复登录')
    {
        if (Session::has('user_name'))
        {
            return $this->error($msg);
        }
    }

    /**
     * 用于后台页面判断是否已经登录，未登录则提示登录
     * @param string $msg 提示消息
     * @param string $url 跳转链接
     *
     */
    public function loggedIn($msg='当前未登录,请先登录',$url="user/login")
    {
        if (!Session::has('user_name'))
        {
            return $this->error($msg,$url);
        }
    }


//    public function loginCheck($logged=true){
//        //如果已经登录且需要登录，则跳转到登录后页面
//        if ($logged){
//            if (!Session::has('user_name')){
//                return $this->error('当前未登录,请先登录','user/login');
//            }
//        }else{
//            if (Session::has('user_name')){
//                return $this->error('当前已经登陆,请勿重复登录');
//            }
//        }
//    }
}