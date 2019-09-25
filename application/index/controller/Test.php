<?php
/**
 * 测试专用控制器
 */

namespace app\index\controller;

use app\common\model\AssetAccount;
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
        return var_dump(AssetAccount::get(4));
    }
}