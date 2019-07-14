<?php
/**
 * kwok_user表的用户模型
 */

namespace app\common\model;

use think\Model;
class User extends Model
{
    protected $pk = 'id'; //默认主键
    protected $table = 'kwok_user'; //当前模型绑定的数据表

    protected $autoWriteTimestamp = true; //自动时间戳 十位正整数
    protected $createTime = 'create_time';//自动写入创建时间
    protected $updateTime = 'update_time';//自动写入更新时间
    protected $dateFormat = 'Y年m月d日';   //时间自动转换


    //获取器 实现字段含义自动转换 比如 status 1 表示 启用
    /**
     * 获取status字段含义
     * @param $value string 要获取的字段值
     * @return mixed 返回的含义
     */
    public function getStatusAttr($value)
    {
        $status = ['1' => '启用','0' => '禁用'];
        return $status[$value];
    }

    /**
     * 获取is_admin字段含义
     * @param $value
     * @return mixed
     */
    public function  getIsAdminAttr($value)
    {
        $status = ['1' => '管理员','0' => '普通用户'];
        return $status[$value];
    }


    //修改器 顾名思义就是修改 可以实现密码自动加密入库

    /**
     * 实现密码的自动加密
     * @param $value  string 传入的密码原文
     * @return string 返回经过sha1加密的字符串
     */
    public function setPasswordAttr($value)
    {
        return sha1($value);
    }


}