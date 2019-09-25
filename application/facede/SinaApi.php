<?php


namespace app\facede;


use think\Facade;

class SinaApi extends Facade
{
    protected static function getFacadeClass()
    {
        return 'app\common\model\SinaApi';
    }
}