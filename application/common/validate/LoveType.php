<?php
/**
 * kwok_love_type表的验证器
 */

namespace app\common\validate;


use think\Validate;
class LoveType extends Validate
{
    protected $rule = [
        'user_id|用户ID'  => 'require|integer',
        'name|类型名称'=> 'require|chsAlphaNum',
        'type|图标样式'=> 'require',
        'div_background|背景颜色'=> 'require',
    ];
}