<?php
namespace app\index\model;

use think\Model;
use app\index\model\Profile;

class User extends Model
{
	#protected $pk = 'uid';
	protected $insert = ['status'=> 0];  //定义自动完成属性
	
    protected $autoWriteTimestamp = true;
		
	
	protected function getStatusAttr($value){
		$status = [-1 => '删除', 0 => '学生', 1 => '班长', 2 => '老师'];
        return $status[$value];
	}
    
	
	public function profile()
	{
		return $this->hasOne('Profile');
	}
	public function classes()
	{
		return $this->belongsTo('Classes');
	}
	
}