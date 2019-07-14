<?php
/**
 * 针对love项目的处理模型
 */

namespace app\love\model;

//引入基本模型用于继承
use think\facade\Config;
use think\Model;

//引入User模型
use app\common\model\User as UserModel;

class LoveDb extends Model
{

    protected $pk = 'id'; //默认主键
    protected $table = 'kwok_love'; //当前模型绑定的数据表
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
//    public function getUserIdAttr($value)
//    {
//        $res = UserModel::get($value);
//        return $res['name'];
//    }

    /**
     * 获取look_ permission字段含义
     * @param $value string 要获取的字段的值
     * @return mixed 返回的含义
     */
    public function getLookPermissionAttr($value)
    {
        $status = ['1' => '公开','0' => '私密'];
        return $status[$value];
    }

    /**
     * 获取time字段含义
     * 1. 年月日 2000-01-01
     * 2. 年月日时分秒 2000-01-01 01-01-01
     * 3. 未发布
     * @param $value int 传入love表id
     * @return false|string 返回年月日或年月日时分秒或未发布
     */
    public function getTimeAttr($value)
    {
        if ($value !== null) {
            //获取时分秒
            $his = date('His',$value);
            //如果是文本型六个0,则说明不显示时分秒
            if ($his == '000000'){
                //返回年月日
                return date('Y-m-d',$value);
            }else{
                //否则返回年月日时分秒
                return date('Y-m-d H-i-s',$value);
            }
        }else{
            //如果为null 则还未发布
            return '未发布';
        }

    }


    /**
     * 获取在一起的天数并向上取整(love_begins_day的时间戳代表是16.10.16零时零分)
     * @return int 整数 天数
     */
    public function getLoveDay()
    {
        return ceil((time()-Config::get('love.love_begins_day'))/86400);
    }

    /**
     * 获取正常未删除的已发布的公开记录条数
     * @return float|string 返回正常未删除已发布的公开记录条数
     */
    public function getPublishedPublicRecords()
    {
        return LoveDb::where('status',1)
            ->where('look_permission',1)
            ->where('time','>',0)
            ->count();
    }

    /**
     * 获取正常未删除的已发布的隐私记录条数
     * @return float|string 返回正常未删除已发布的隐私记录条数
     */
    public function getPublishedPrivacyRecords()
    {
        return LoveDb::where('status',1)
            ->where('look_permission',0)
            ->where('time','>',0)
            ->count();
    }

    /**
     * 获取正常未删除的未发布草稿记录条数(不区分是否公开)
     * @return float|string 返回正常未发布记录条数
     */
    public function getUnpublishedRecords()
    {
        return LoveDb::where('status',1)
            ->where('time',null)
            ->count();
    }

    /**
     * 获取状态 正常或已删除
     * @param $value int
     * @return mixed 返回状态结果 正常或删除
     */
    public function  getStatusAttr($value)
    {
        $status = ['1' => '正常','0' => '已删除'];
        return $status[$value];
    }
}