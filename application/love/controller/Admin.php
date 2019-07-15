<?php
/**
 * 时间线后台控制器
 */

namespace app\love\controller;

use app\common\controller\Base;

use app\facede\LoveDb;
use app\facede\LoveTypeDb;

class Admin extends Base
{

    //此类下的所有方法都需要先执行Base\noLogin,以防止未登录查看页面
    protected $beforeActionList = ['noLogin',];

    public function index()
    {
        //获取相恋天数
        $love_day = LoveDb::getLoveDay();
        //获取已发布的公开记录
        $published_public_records = LoveDb::getPublishedPublicRecords();
        //获取已发布的隐私记录
        $published_privacy_records = LoveDb::getPublishedPrivacyRecords();
        //获取草稿未发布条数
        $unpublished_records = LoveDb::getUnpublishedRecords();

        $this->assign([
                'love_day'           => $love_day,
                'published_public_records' => $published_public_records,
                'published_privacy_records'=> $published_privacy_records,
                'unpublished_records'      => $unpublished_records,
        ]);
        return $this->fetch();
    }

    public function add()
    {
        return $this->fetch();
    }
    public function test()
    {
        return $this->fetch();
    }

    public function typeManagement()
    {
        $typelist = LoveTypeDb::getTypeList();
        $this->assign('typelist',$typelist);
        return $this->fetch();
    }

    public function uiElements()
    {
        return $this->fetch();
    }
    public function form()
    {
        return $this->fetch();
    }
    public function chart()
    {
        return $this->fetch();
    }
    public function tab_panel()
    {
        return $this->fetch();
    }
    public function table()
    {
        return $this->fetch();
    }
    public function empty1()
    {
        return $this->fetch();
    }
}