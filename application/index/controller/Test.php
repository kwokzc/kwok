<?php
/**
 * 测试专用控制器
 */

namespace app\index\controller;

use app\common\model\User;
use app\common\controller\Base;
use app\love\model\LoveDb;
use think\facade\Env;
use think\facade\Config;

//引入User模型
use app\common\model\User as UserModel;

class Test extends Base
{
    //测试User表的验证器
    public function index()
    {
        $lista = '猛然得知，他是校友，年久的记忆翻滚而至…… <br>忐忑而又欢喜地发送了时隔三年的第一条消息……';
        $this->assign('list',$lista);
        return $this->fetch();
    }
}