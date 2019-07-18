<?php
/**
 * 时间线前台控制器
 */

namespace app\love\controller;

//导入公共控制器
use app\common\controller\Base;

//use app\facede\LoveDb;
use app\facede\LoveTypeDb;
use app\love\model\LoveDb;
use think\Db;
use think\facade\Session;

class Index extends Base
{
    public function index()
    {
        //判断用户id是否为1或2(考虑到其他系统只允许管理员登录)
        if (Session::get('user_id')==1 or Session::get('user_id')==2){
            //如果是，则可以展示彼此可见消息
            //获取status(未删除)为1、time大于0(不是草稿)、按时间倒序，分页10
            $res = LoveDb::where('status',1)
                ->where('time','>',0)
                ->order('time', 'desc')
                ->paginate(10);
        }else{
            //如果不是，只展示公开消息
            $res = LoveDb::where('status',1)
                ->where('time','>',0)
                ->where('look_permission',1)
                ->order('time', 'desc')
                ->paginate(10);

        }

        $type = LoveTypeDb::getTypeList();
//        $page = $res->render();
//        $list = $res->all();
        return var_dump($type);
        $this->assign('list',$res);
        $this->assign('type',$type);
//        $this->assign('page',$page);
//        var_dump($res);

        return $this->fetch();
    }
}