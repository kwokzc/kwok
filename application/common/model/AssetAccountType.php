<?php
/**
 * 用于处理 资产账户分类表：kwok_asset_account_type
 *
 */

namespace app\common\model;


use think\Model;

class AssetAccountType extends Model
{
    protected $pk = 'id'; //默认主键
    protected $table = 'kwok_asset_account_type'; //当前模型绑定的数据表

    protected $autoWriteTimestamp = true; //自动时间戳 十位正整数
    protected $createTime = 'create_time';//自动写入创建时间
    protected $updateTime = 'update_time';//自动写入更新时间
    protected $dateFormat = 'Y年m月d日';   //时间自动转换



    public function getStatusAttr($value)
    {
        $status = [-1=>'删除',0=>'禁用',1=>'正常',2=>'待审核'];
        return $status[$value];
    }


}