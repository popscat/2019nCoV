<?php
namespace app\index\model;

use think\Model;

class User extends Model
{
	protected $insert = ['status'=> 0];  //定义自动完成属性
	
    protected $autoWriteTimestamp = false;
		
	
	protected function getStatusAttr($value){
		$status = [-1 => '删除', 0 => '学生', 1 => '班长', 2 => '老师'];
        return $status[$value];
	}
    
	public function classes()
	{
		return $this->belongsTo('Classes','ncov_CS');
	}
	/*
	public function health_condition()
	{
		return $this->hasOne('Health_condition');
	}
	*/
}