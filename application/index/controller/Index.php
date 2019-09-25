<?php
namespace app\index\controller;
//导入公共控制器
use app\common\controller\Base;
use app\facede\AssetApi;

class Index extends Base
{
    //总览首页
    public function index()
    {
        return $this->view->fetch();
    }

    //资产类型页面
    public function assetType()
    {
        return $this->view->fetch();
    }

    //ETF网格页面
    public function fundGrid()
    {
        return $this->view->fetch();
    }

    //资产管理页面
    public function assetClassification()
    {
        //获取账户分类列表
//        $assetAccountTypeList = AssetApi::getAssetAccountPidList();
//        return var_dump($assetAccountTypeList);

        //获取账户列表
//        $assetAccountList = AssetApi::getAssetAccountList();

        //赋值到模板
//        $this->assign('assetAccountList',$assetAccountList);
//        $this->assign('assetAccountTypeList',$assetAccountTypeList);

        return $this->view->fetch();
    }

}
