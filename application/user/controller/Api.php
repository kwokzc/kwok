<?php
/**
 * 项目公用的User类，用于对接到数据库kwok_user表
 * 用户注册、登录验证、找回密码
 */

namespace app\user\controller;
//引入公共控制器
use app\common\controller\Base;

//引入静态代理
use think\facade\Request;
use think\facade\Session;

//引入User模型
use app\common\model\User as UserModel;

class Api extends Base
{
    /**
     * 用户注册验证写入
     *
     * @return string json
     */
    public function register()
    {
        //判断是否是ajax传入
        if (Request::isAjax()){
            //保存要验证的post数据
            $data = Request::post();

            //自定义的User验证规则
            //此时也可以自定义规则 参考login方法
            $rule = 'app\common\validate\User';

            //开始验证并保存结果
            $res = $this->validate($data,$rule);

            if (true !== $res){
                //失败返回
                return show(0,$res);
            }else{
                //成功则向数据库写入
                if ($user = UserModel::create($data)){
                    //写入成功再获取一次
                    $res = UserModel::get($user->id);

                    //将用户数据写入Session完成注册成功和登录
                    Session::set('user_id',$res->id);
                    Session::set('user_name',$res->name);

                    //返回成功信息
                    return show(1,'注册成功');

                }else{
                    //返回失败信息
                    return show(0,'注册失败');
                }
            }
        }else{
            //不是ajax请求则可能有危险
            return show(0,'请求类型错误');
        }
    }


    /**
     * 用户登录验证
     *
     * @return string
     */
    public function login()
    {
        if (Request::isAjax()){ //判断是否是ajax传入

            //使用模型来查询验证数据

            //要验证的数据为post发送过来的
            $data = Request::post();

            //自定义的User验证规则
            $rule = [
                'name|用户名' => 'require|max:20|chsAlphaNum',
                'password|密码'=> 'require|length:4,20|alphaNum',
            ];

            //验证并保存验证结果
            $res = $this->validate($data,$rule);

            //验证结果判断
            if (true !== $res){
                //失败返回
                return show(0,$res);
            }else{
                //验证成功则向数据库查询
                //引入一个外部变量$data到闭包函数
                $res = UserModel::get(function ($query) use ($data) {
                    $query->where('name',$data['name'])
                            //密码为sha1加密
                          ->where('password',sha1($data['password']));
                });//如果查询不到会返回null

                //判断结果
                if (null == $res){
                    return show(0,'登录失败,请检查用户名或密码！');
                }else{
                    //登录成功
                    //将用户数据写入Session
                    Session::set('user_id',$res->id);
                    Session::set('user_name',$res->name);
                    //返回成功信息
                    return show(1,'登录成功');
                }
            }
        }else{
            //不是ajax请求则可能有危险
            return show(0,'请求类型错误');
        }
    }

    /**
     * 找回密码验证
     *
     * @return string
     */
    public function password()
    {
        //判断是否是ajax传入
        if (Request::isAjax()){
            //保存要验证的post数据
            $data = Request::post();

            //User验证规则
            $rule = [
                'name|用户名'  => 'require|max:20|chsAlphaNum',
                'email|邮箱'=> 'require|max:20|email',
                'password|密码'=> 'require|length:4,20|alphaNum|confirm',
            ];

            //验证并保存结果
            $res = $this->validate($data,$rule);

            //判断验证结果
            if (true !== $res){
                //验证失败返回
                return show(0,$res);
            }else{
                //成功则向数据库查询
                $res = UserModel::get(function ($query) use ($data) {
                    $query->where('name',$data['name'])
                        ->where('email',$data['email']);
                });//查询不到会返回null

                //判断结果
                if (null == $res){
                    //返回失败信息
                    return show(0,'验证失败,请检查用户名或邮箱！');
                }else{
                    //登录成功
                    //将用户数据写入Session
                    Session::set('user_id',$res->id);
                    Session::set('user_name',$res->name);

                    $res->password = sha1($data['password']);
                    if ($res->save()){
                        return show(1,'验证成功,密码已重置');
                    }else{
                        return show(0,'验证成功,但密码重置失败，请联系管理员');

                    }
                }
            }
        }else{
            return show(0,'请求类型错误');
        }
    }
}