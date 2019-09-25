<?php


namespace app\kwok\controller;


use app\common\controller\Base;

class Index extends Base
{
    public function code404(){
        return $this->fetch('404');
    }
    public function code500(){
        return $this->fetch('500');
    }
}