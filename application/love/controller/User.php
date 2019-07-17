<?php
/**
 * 负责User表的逻辑 控制器
 */

namespace app\love\controller;

use think\facade\Session;

use app\common\controller\Base;

class User extends Base
{
    //注册页面
    public function register()
    {
        $this->logined('已经登录,请勿重复注册');
        $this->assign('title','注册');
        return $this->fetch();
    }

    //登录页面
    public function login()
    {
        $this->logined();
        $this->assign('title','登录');
        return $this->fetch();
    }

    //退出登录
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

    //找回密码页面
    public function password()
    {
        $this->logined('已经登录,无需找回密码');
        $this->assign('title','找回密码');
        return $this->fetch();
    }

}