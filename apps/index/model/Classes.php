<?php
namespace app\index\model;

use think\Model\User;
use think\Model;


class Classes extends Model{
	
	public function getStudentsNumAttr()
	{
		return count($this->students);
	} 
	public function getWxNumAttr()
	{
		return rand(1,count($this->students));
	} 
	
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