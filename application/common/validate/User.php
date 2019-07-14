<?php
/**
 * kwok_user表的验证器
 */

namespace app\common\validate;

use think\validate;
class User extends validate
{
    protected $rule = [
        'name|用户名'  => 'require|max:20|chsAlphaNum|unique:kwok_user',
        'password|密码'=> 'require|length:4,20|alphaNum|confirm',
        'email|邮箱'=> 'require|max:20|email|unique:kwok_user',
    ];
}