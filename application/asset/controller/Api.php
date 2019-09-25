<?php
/**
 * 用户资产相关的操作
 */

namespace app\asset\controller;


use app\common\controller\Base;

use think\facade\Request;
use app\common\model\AssetAccount as Account;
use app\common\model\AssetVariety as Variety;
use app\common\model\AssetType as Type;

class Api extends Base
{
    /**
     * 获取资产账户分类列表,返回json或数组
     * @param int $isJson
     * @return array|void
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getAssetAccountList($isJson = 1){
        //使用模型获取pid大于0的数据，并转为数组
        $res = Account::where('pid','>','0')->select()->toArray();

        //如果获取成功且不为0条，则返回json
        if ($res){
            //如果需要返回json则返回json
            if ($isJson==1){
                $tmp['data'] = $res;
                return show(1,'成功',$res);
//                exit(json_encode($tmp));
            }else{
                return $res;
            }
        }else{
            return show(0,'查询资产账户列表失败');
        }
    }

    /**
     * 获取资产账户分类列表,返回json或数组
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getAssetAccountPidList($isJson = 1)
    {
        //获取pid=0的(账户分类)数据，并转数组
        $res = Account::where('pid','0')->select()->toArray();
        //如果获取成功且不为0条，则返回json
        if ($res){
            if ($isJson==1) {
                return show(1,'成功',$res);
            }else{
                return $res;
            }
        }else{
            return show(0,'查询资产账户分类失败');
        }
    }

    /**
     * 获取资产品种列表
     * @param int $isJson
     */
    public function getAssetVarietyList($isJson = 1)
    {
        //获取数据，并转数组
        $res = Variety::select()->toArray();
        //如果获取成功且不为0条，则返回json
        if ($res){
            if ($isJson==1) {
                return show(1,'成功',$res);
            }else{
                return $res;
            }
        }else{
            return show(0,'查询资产品种失败');
        }
    }

    /**
     * 获取资产类型列表
     * @param int $isJson
     */
    public function getAssetTypeList($isJson = 1)
    {
        //获取数据，并转数组
        $res = Type::select()->toArray();
        //如果获取成功且不为0条，则返回json
        if ($res){
            if ($isJson==1) {
                return show(1,'成功',$res);
            }else{
                return $res;
            }
        }else{
            return show(0,'查询资产品种失败');
        }
    }


    /**
     * 增加资产账户
     */
    public function addAssetAccount(){
        //判断是否是Ajax发送
        if (Request::isAjax()){

            //保存要验证的post数据
            $data = Request::post();

            //如果等于on则为true，否则为false
            $data['status'] = $data['status'] == 'on' ? true:false;

            //自定义验证规则
            $rule = [
                'name|账户名' => 'require',
                'pid|父级'    => 'require|number',
                'status|状态' => 'require|boolean',
            ];


            //验证并保存验证结果
            $res = $this->validate($data,$rule);

            //验证结果判断
            if (true !== $res){
                //失败返回
                return show(0,$res);
            }else{
                //成功则向数据库写入
                if ($res = Account::create($data)){
                    //写入成功再获取一次
                    $data = Account::get($res->id);

                    //返回成功信息
                    return show(1,'新增成功',$data);

                }else{
                    //返回失败信息
                    return show(0,'新增失败');
                }
            }

        }
    }

}