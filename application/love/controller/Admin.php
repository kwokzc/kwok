<?php
/**
 * 时间线后台控制器
 */

namespace app\love\controller;

use app\common\controller\Base;

use app\common\model\User as UserModel;
use app\facede\LoveDb;
use app\facede\LoveTypeDb;
use think\facade\Request;
use think\facade\Session;

class Admin extends Base
{

    //此类下的所有方法都需要先执行Base\noLogin,以防止未登录查看页面
    protected $beforeActionList = ['isLogin',];

    public function index()
    {
        //获取相恋天数
        $love_day = LoveDb::getLoveDay();
        //获取已发布的公开记录
        $published_public_records = LoveDb::getPublishedPublicRecords();
        //获取已发布的隐私记录
        $published_privacy_records = LoveDb::getPublishedPrivacyRecords();
        //获取草稿未发布条数
        $unpublished_records = LoveDb::getUnpublishedRecords();

        $this->assign('head_title','后台首页');
        $this->assign([
                'love_day'           => $love_day,
                'published_public_records' => $published_public_records,
                'published_privacy_records'=> $published_privacy_records,
                'unpublished_records'      => $unpublished_records,
        ]);
        return $this->fetch();
    }

    public function add()
    {
        $this->assign('head_title','后台首页');

        return $this->fetch();
    }

    public function list()
    {
        $this->assign('head_title','后台首页');

        $lovelist = LoveDb::getLoveList();
        $this->assign('lovelist',$lovelist);


        return $this->fetch();
    }

    public function typeManagement()
    {
        $this->assign('head_title','后台首页');

        $typelist = LoveTypeDb::getTypeList();
        $this->assign('typelist',$typelist);

        return $this->fetch();
    }

    public function typeEditSave()
    {
        if (Request::isAjax()){ //判断是否是ajax传入

            //使用模型来创建数据

            //验证数据
            $data = Request::post();//要验证的数据
            $kname = array('id', 'name', 'type', 'div_background');
            unset($data['td_3']);
            $data = array_edit_key($data,$kname);
            //因为是编辑保存所以必须传入id,因此在方法内自建规则
            $rule = [
                'id|类型ID'  => 'require|integer',
                'name|类型名称'=> 'require|chsAlphaNum',
                'type|图标样式'=> 'require',
                'div_background|背景颜色'=> 'require',
            ];
//            $rule = 'app\common\validate\LoveType';//自定义的User验证规则
            $res = $this->validate($data,$rule);//开始验证

            if (true !== $res){
                //失败返回
                return show(0,$res);
            }else{
                //验证成功 向数据库写入

                $res = LoveTypeDb::where('id',$data['id'])
                                 ->update($data);
                if ($res == 1){
                    return show(1,'更新成功');
                }else{
                    return show(0,'更新失败');
                }
            }
        }else{
            return show(0,'请求类型错误');
        }
    }

    public function typeAddSave()
    {
        if (Request::isAjax()){ //判断是否是ajax传入
            //使用模型来创建数据
            //验证数据
            $data = Request::post();//要验证的数据
            $user_id = Session::get('user_id');
            if ($user_id != 0){
                $data['user_id'] = $user_id;
            }else{
                return show(0,'获取登录用户ID失败');
            }
//            return var_dump($data);
            $rule = 'app\common\validate\LoveType';//自定义的User验证规则
            $res = $this->validate($data,$rule);//开始验证

            if (true !== $res){
                //失败返回
                return show(0,$res);
            }else{
                //验证成功 向数据库写入

                $res = LoveTypeDb::create($data);
                if ($res->id){
                    return show(1,'添加成功');
                }else{
                    return show(0,'添加失败');
                }
            }
        }else{
            return show(0,'请求类型错误');
        }
    }
    public function admin()
    {
        $this->assign('head_title','后台首页');

        return $this->fetch();
    }
    public function a()
    {
        $this->assign('head_title','后台首页');
        return $this->fetch();
    }

    public function uiElements()
    {
        $this->assign('head_title','后台首页');
        
        return $this->fetch();
    }
    public function form()
    {
        $this->assign('head_title','后台首页');

        return $this->fetch();
    }
    public function chart()
    {
        $this->assign('head_title','后台首页');

        return $this->fetch();
    }
    public function tab_panel()
    {
        $this->assign('head_title','后台首页');

        return $this->fetch();
    }
    public function table()
    {
        $this->assign('head_title','后台首页');

        return $this->fetch();
    }
    public function empty1()
    {
        $this->assign('head_title','后台首页');

        return $this->fetch();
    }
}