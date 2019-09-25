<?php
/**
 * 用于处理 资产品种表：kwok_asset_variety
 *
 */

namespace app\common\model;


use think\Model;

class AssetVariety extends Model
{
    protected $pk = 'id'; //默认主键
    protected $table = 'kwok_asset_variety'; //当前模型绑定的数据表

    protected $autoWriteTimestamp = true; //自动时间戳 十位正整数
    protected $createTime = 'create_time';//自动写入创建时间
    protected $updateTime = 'update_time';//自动写入更新时间
    protected $dateFormat = 'Y年m月d日 H:m:s';   //时间自动转换


    /**
     * status字段获取器,自动返回中文含义
     * @param $value
     * @return mixed
     */
    public function getStatusAttr($value)
    {
        $status = [-1=>'删除',0=>'禁用',1=>'启用',2=>'待审核'];
        return $status[$value];
    }

    /**
     * status字段获取器,自动返回中文含义
     * @param $value
     * @return mixed
     */
    public function getMeansOfTransactionAttr($value)
    {
        $status = [-1=>'删除',0=>'禁用',1=>'场内',2=>'场外'];
        return $status[$value];
    }

    /**
     * account_id字段自动取中文账户组名称
     * @param $value
     * @return mixed
     */
    public function getAccountIdAttr($value)
    {
        if ($value!=0){
            //返回的是一个对象数组
            $res = AssetAccount::get($value);
            //取name返回
            return $res['name'];
        }else{
            return '没有父级';
        }
    }

    /**
     * type_id字段自动取中文类型名称
     * @param $value
     * @return string
     */
    public function getTypeIdAttr($value)
    {
        if ($value!=0){
            //返回的是一个对象数组
            $res = AssetType::get($value);
            //取name返回
            return $res['name'];
        }else{
            return '没有父级';
        }
    }

}