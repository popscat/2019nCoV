<?php
namespace app\index\controller;

use app\common\controller\Base;


class Index extends Base
{
	public function Index(){
		return  view('index',['title' =>'pops']);
	}
	
}