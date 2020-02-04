<?php
namespace app\Index\controller;

use think\Controller;
use think\Db;
use think\Url;

class Blog{
	public function Index(){
        return "hello thinkphp!";
	}
	public function read($name=''){
		return "search contents with name!";
	}
	public function get($id=''){
		return "sarch contens with id!";
	}
	public function archive($year='',$month=''){
		return Url::build('blog/read','name=thinkphp');
		#return var_dump($_SERVER);
	}
	
	
}

?>