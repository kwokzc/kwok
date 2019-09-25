<?php
/**
 * 用于处理 资产品种表：kwok_asset_type
 *
 */

namespace app\common\model;


use think\Model;

class AssetType extends Model
{
    protected $pk = 'id'; //默认主键
    protected $table = 'kwok_asset_type'; //当前模型绑定的数据表

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
     * pid字段自动取中文name
     * @param $value
     * @return mixed
     */
    public function getPidAttr($value)
    {
        if ($value!=0){
            //返回的是一个对象数组
            $res = AssetType::get($value);
            //取name返回
            return $res['name'];
        }else{
            return '一级分类';
        }
    }

}