<?php


namespace app\index\controller;


use think\Controller;

class Admin extends Controller
{
    public function index(){
        return $this->view->fetch();
    }

}