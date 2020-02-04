<?php
namespace app\index\model;

use think\Model;

class User extends Model
{
	#protected $insert = ['status'];  //定义自动完成属性
    
	protected function setStatusAttr($value,$data)
	{
    
	}
	protected function getStatusAttr($value){
		$status = [-1 => '删除', 0 => '禁用', 1 => '正常', 2 => '待审核'];
        return $status[$value];
	}

}