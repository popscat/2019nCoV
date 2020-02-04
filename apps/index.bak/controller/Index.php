<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Request;

class Index extends Controller
{
	#use \traits\controller\Jump;
    public function index($name='World')
    {

        if ('thinkphp' == $name){
			$this->success('You\'re willing to use thinkphp!','test');
		} else {
		    $this->error('wrong name!','hello');
		}
    }
    public function test()
    {
        #$data = Db::name('data')->find();
		$data = Db::name('data')
		     ->limit(10)
			 ->select();
		dump($data);
		#$this->assign('result',$data);
		#return $this->fetch();
    }
    public function hello($name='world')
    {
		echo request()->url().'<br/>';
		$this->assign('name',$name);
		return $this->fetch();
    }

}

