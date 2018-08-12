<?php
namespace app\index\model;

use think\Model;
use think\DB;
class User extends Model
{
	public function user()
	{
		return Db::table('user')->select();
	}
}