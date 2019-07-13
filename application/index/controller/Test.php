<?php
/**
 * 测试专用控制器
 */

namespace app\index\controller;

use app\common\controller\Base;
class Test extends Base
{
    //测试User表的验证器
    public function test1()
    {
        $data = [
            'name' => 'qwe',
            'email'=> 'a@ikwok.cn',
            'password'=> 'qwer',
        ];

        $rule = 'app\common\validate\User';

        return $this->validate($data,$rule);
    }
}