<?php
/**
 * 时间线前台控制器
 */

namespace app\love\controller;

//导入公共控制器
use app\common\controller\Base;

use app\facede\LoveTypeDb;
use app\love\model\LoveDb;
use think\facade\Session;

class Index extends Base
{
    public function index()
    {
        //定义一个可见用户id数组
        $user_arr = [1,2];

        //判断当前登录用户id是否为可见用户id
        if (in_array(Session::get('user_id'),$user_arr)){
            //如果是，则可以展示彼此可见消息
            //获取status(未删除)为1、time大于0(不是草稿)、按时间倒序，分页10
            $love_list = LoveDb::where('status',1)
                ->where('time','>',0)
                ->order('time', 'desc')
                ->paginate(10);
        }else{
            //如果不是，只展示公开消息
            $love_list = LoveDb::where('status',1)
                ->where('time','>',0)
                ->where('look_permission',1)
                ->order('time', 'desc')
                ->paginate(10);

        }

        //获取类型列表 此时是对象
        $type = LoveTypeDb::getTypeList();
        //转换为数组
        $love_type = $type->toArray();

        //传递给前台
        $this->assign('love_list',$love_list);
        $this->assign('love_type',$love_type);

        return $this->fetch();
    }
}