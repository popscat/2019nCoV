<?php
namespace app\index\model;

use think\Model\User;
use think\Model;


class Classes extends Model{
	
	public function students(){
		return $this->hasMany('User');
	}
	public function monitor(){
		return $this->hasOne('User');
	}
	#protected function getIdAttr(){
	#return rand(1,100000);
	#}
		
}