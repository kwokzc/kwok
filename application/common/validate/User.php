<?php
//用户信息表的字段验证器/类

namespace app\validate;


use think\validate;
class User extends validate
{
    protected $rule = [
        'name|用户名'=>[
            'require',
            'max'=>20,
        ],
        'password|密码'=>[
            'require',
            'min'=>3,
            'max'=>20,
        ],
        'email|邮箱'=>[
            'require',
            'email',
        ]
    ];
}