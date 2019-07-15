<?php


namespace app\facede;


use think\Facade;

class LoveTypeDb extends Facade
{
    protected static function getFacadeClass()
    {
        return 'app\love\model\LoveTypeDb';
    }

}