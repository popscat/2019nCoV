<?php
namespace app\index\controller;

use think\Controller;


class Index extends Controller
{
	public function Index(){
		return  view('header',['title' =>'pops']);
	}
	
}