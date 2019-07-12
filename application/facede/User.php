<?php


namespace app\facede;

use think\facade;
class User extends facade
{
    protected static function getFacadeClass()
    {
        return 'app\validate\User';
    }
}