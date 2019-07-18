<?php
/**
 * kwok_love表的验证器
 */

namespace app\common\validate;


use think\Validate;
class Love extends Validate
{
    protected $rule = [
        'user_id|用户ID'  => 'require|integer',
        'title|标题'      => 'require',
        'content|内容'    => 'require',
//        'location|地点'   => 'require',
        'type_id|类型'    => 'require',
        'look_permission|查看权限'=> 'require|integer',
        'time|时间'       => 'integer',
    ];
}