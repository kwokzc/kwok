<?php
/**
 * kwok_user表的用户模型
 */

namespace app\common\model;

use think\Model;
class User extends Model
{
    protected $pk = 'id';
    protected $table = 'kwok_user';
}