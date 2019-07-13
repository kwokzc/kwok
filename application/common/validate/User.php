<?php
/**
 * kwok_user表的验证器
 */

namespace app\common\validate;

use think\validate;
class User extends validate
{
    protected $rule = [
        'name|用户名'=>[
            'require',//必须
            'max'=>20,//最大20位
            'chsAlphaNum',//汉字字母数字
            'unique'=>'kwok_user',//该字段在此表必须是唯一
        ],
        'password|密码'=>[
            'require',//必须
            'length'=>'4,20',//最小三位，最大20位
            'alphaNum',//数字和字母
            'confirm',//自动于password_confirm字段自动相等验证
        ],
        'email|邮箱'=>[
            'require',//必须
            'email',//邮箱规则
            'unique'=>'kwok_user',//该字段在此表必须是唯一
        ]
    ];
}