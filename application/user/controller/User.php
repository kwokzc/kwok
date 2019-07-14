<?php
/**
 * 项目公用的User类，用于对接到数据库kwok_user表
 */

namespace app\user\controller;
//引入公共控制器
use app\common\controller\Base;

//引入静态代理
use think\facade\Request;
use think\facade\Session;

//引入User模型
use app\common\model\User as UserModel;

class User extends Base
{
    //用户注册验证写入
    public function insert()
    {
        if (Request::isAjax()){ //判断是否是ajax传入

            //使用模型来创建数据

            //验证数据
            $data = Request::post();//要验证的数据
            $rule = 'app\common\validate\User';//自定义的User验证规则
            $res = $this->validate($data,$rule);//开始验证

            if (true !== $res){
                //失败返回
                return show(0,$res);
            }else{
                //向数据库写入
                if (UserModel::create($data)){

                    //将用户数据写入Session
                    Session::set('user_id',$res->id);
                    Session::set('user_name',$res->name);

                    return show(1,'注册成功');

                }else{
                    return show(0,'注册失败');
                }
            }
        }else{
            return show(0,'请求类型错误');
        }
    }

    //用户登录查询验证
    public function loginCheck()
    {
        if (Request::isAjax()){ //判断是否是ajax传入

            //使用模型来查询验证数据

            //验证数据
            $data = Request::post();//要验证的数据
            $rule = [
                'name|用户名' => 'require|max:20|chsAlphaNum',
                'password|密码'=> 'require|length:4,20|alphaNum',
            ];//自定义的User验证规则
            $res = $this->validate($data,$rule);//开始验证

            if (true !== $res){
                //失败返回
                return show(0,$res);
            }else{

                //向数据库查询
                $res = UserModel::get(function ($query) use ($data) {
                    $query->where('name',$data['name'])
                          ->where('password',sha1($data['password']));
                });//查询不到返回null

                //判断结果
                if (null == $res){
                    return show(0,'登录失败,请检查用户名或密码！');
                }else{
                    //登录成功
                    //将用户数据写入Session
                    Session::set('user_id',$res->id);
                    Session::set('user_name',$res->name);
                    return show(1,'登录成功');
                }
            }
        }else{
            return show(0,'请求类型错误');
        }
    }

    public function idPassword($id)
    {
        $user = UserModel::get($id);
//        $user->password =
    }

    //用于找回密码验证
    public function password()
    {
        if (Request::isAjax()){ //判断是否是ajax传入

            //使用模型来查询验证数据

            //验证数据
            $data = Request::post();//要验证的数据
            $rule = [
                'name|用户名' => 'require|max:20|chsAlphaNum',
                'email|邮箱'=> 'require|max:20|email',
            ];//自定义的User验证规则
            $res = $this->validate($data,$rule);//开始验证

            if (true !== $res){
                //验证失败返回
                return show(0,$res);
            }else{

                //向数据库查询
                $res = UserModel::get(function ($query) use ($data) {
                    $query->where('name',$data['name'])
                        ->where('email',$data['email']);
                });//查询不到返回null

                //判断结果
                if (null == $res){
                    return show(0,'验证失败,请检查用户名或邮箱！');
                }else{
                    //登录成功
                    //将用户数据写入Session
                    Session::set('user_id',$res->id);
                    Session::set('user_name',$res->name);

                    $res->password = '1234';
                    if ($res->save()){
                        return show(1,'验证成功,当前密码为"1234"<br>请在后台及时修改密码');
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