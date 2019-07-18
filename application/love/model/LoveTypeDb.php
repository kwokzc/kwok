<?php
/**
 * 针对kwok_love_type项目的处理模型
 */

namespace app\love\model;

//引入基本模型用于继承
use think\facade\Config;
use think\Model;

//引入User模型
use app\common\model\User as UserModel;

class LoveTypeDb extends Model
{

    protected $pk = 'id'; //默认主键
    protected $table = 'kwok_love_type'; //当前模型绑定的数据表
    protected $autoWriteTimestamp = true; //自动时间戳 十位正整数
    protected $createTime = 'create_time';//自动写入创建时间
    //protected $updateTime = 'update_time';//自动写入更新时间
    //protected $dateFormat = 'Y年m月d日';   //时间自动转换


    //获取器 实现字段含义自动转换 比如 status 1 表示 启用

    /**
     * 获取user_id对应name
     * @param $value int 传入user_id
     * @return mixed 返回name
     */
   public function getUserIdAttr($value)
   {
       $res = UserModel::get($value);
       return $res['name'];
   }

    /**
     * 获取状态 正常或已删除
     * @param $value int
     * @return mixed 返回状态结果 正常或删除
     */
    public function  getStatusAttr($value)
    {
        $status = ['1' => '启用','0' => '禁用'];
        return $status[$value];
    }

    /**
     * 获取创建时间 返回时间戳格式化后的时间
     * @param $value int 十位时间戳
     * @return mixed 返回格式化后的时间
     */
    public function  getCreateTimeAttr($value)
    {
        return time('Y-m-d H:i:s',$value);
    }

    /**
     * 获取类型列表所有数据
     */
    public function getTypeList()
    {
        return LoveTypeDb::all();
    }

    /**
     * 获取类型列表所有数据返回数组
     */
    public function getTypeListArr()
    {
        return LoveTypeDb::all();
    }
}