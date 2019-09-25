<?php


namespace app\facede;


use think\Facade;

class AssetApi extends Facade
{
    protected static function getFacadeClass()
    {
        return 'app\asset\controller\Api';
    }

}