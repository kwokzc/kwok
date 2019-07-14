<?php
/**
 * 时间线前台控制器
 */

namespace app\love\controller;

//导入公共控制器
use app\common\controller\Base;

//use app\facede\LoveDb;
use app\love\model\LoveDb;
use think\Db;
use think\facade\Session;

class Index extends Base
{
    public function index()
    {

        if (Session::get('user_id')==1 or Session::get('user_id')==2){
            $res = LoveDb::where('status',1)
                ->where('time','>',0)
                ->order('time', 'desc')
                ->paginate(10);
        }else{
            $res = LoveDb::where('status',1)
                ->where('time','>',0)
                ->where('look_permission',1)
                ->order('time', 'desc')
                ->paginate(10);

        }
//        $page = $res->render();
//        $list = $res->all();

        $this->assign('list',$res);
//        $this->assign('page',$page);
//        var_dump($res);

        return $this->fetch();
    }
}