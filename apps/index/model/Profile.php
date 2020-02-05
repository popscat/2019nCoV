<?php
namespace app\index\model;

use think\Model\User;
use think\Model;


class Profile extends Model{
	
	public function student(){
		return $this->belongsTo('User');
	}
	#protected function getIdAttr(){
	#return rand(1,100000);
	#}
		
}