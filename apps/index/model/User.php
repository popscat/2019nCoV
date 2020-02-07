<?php
namespace app\index\model;

use think\model\Merge;
#use app\index\model\Profile;

class User extends Merge
{
	#protected $pk = 'uid';
	protected $relationModel =['Profile'];
	#protected $insert = ['status'=> 0];  //定义自动完成属性
	protected $fk = 'user_id';
    protected $autoWriteTimestamp = true;
	protected $mapFields = [
	    'id' => 'User.id',
		'profile_id' => 'Profile.id',
	];	
	
	#protected function getStatusAttr($value){
	#	$status = [-1 => '删除', 0 => '学生', 1 => '班长', 2 => '老师'];
    #   return $status[$value];
    #}
    
	
	public function classes()
	{
		return $this->belongsTo('Classes','classes_id');
	}
	public function profile()
	{
		return $this->hasOne('Profile');
	}
	
}