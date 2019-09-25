<?php


namespace app\common\controller;

//引入Session的静态代理
use think\facade\Session;

class User extends Base
{
    //由于前置操作不能传入参数，所以不能使用前置操作来检测是否登录

    /**
     * 注册页面
     * @return mixed
     */
    public function register()
    {
        $this->notLoggedIn('已经登录,禁止重复注册');
        $this->assign('title','注册');
        return $this->fetch();
    }

    /**
     * 登录页面
     * @return mixed
     */
    public function login()
    {
        $this->notLoggedIn('当前已经登陆,请勿重复登录');
        $this->assign('title','登录');
        return $this->fetch();
    }

    /**
     * 找回密码页面
     * @return mixed
     */
    public function password()
    {
        $this->notLoggedIn('已经登录,无需找回密码');
        $this->assign('title','找回密码');
        return $this->fetch();
    }

    /**
     * 退出登录
     * @return string 提示消息
     */
    public function logout()
    {
        //清除Session
        //Session::delete('user_id');
        //Session::delete('user_name');
        Session::clear();

        if (!Session::get('user_name')){
            return show(1,'退出成功');
        }else{
            return show(0,'退出失败');
        }
    }

}