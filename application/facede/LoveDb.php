<?php


namespace app\facede;


use think\Facade;

class LoveDb extends Facade
{
    protected static function getFacadeClass()
    {
        return 'app\love\model\LoveDb';
    }

}