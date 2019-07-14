<?php
namespace app\index\controller;
//导入公共控制器
use app\common\controller\Base;
class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }
}
