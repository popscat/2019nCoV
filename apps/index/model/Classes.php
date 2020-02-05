<?php
namespace app\index\model;

use think\Model\User;


class Classes extends Model{
	
	public function student(){
		return $this->hasMany('User');
	}
	
	
}