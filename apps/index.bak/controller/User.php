<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\index\model\User as UserModel;

class User extends Controller {
	public function index(){
		$list = UserModel::all();
		foreach ($list as $user) {
			echo $user->nickname. "<br/>";
			echo $user->email. "<br/>";
			echo $user->birthday. "<br/>";
			echo $user->create_time.'<br/>';
			echo $user->update_time.'<br/>';
			echo $user->status."<br/>";
			echo '--------------------------------------------------<br/>';
			
		}
	}
	public function add()
	{
		$user = new UserModel;
		if ($user->allowField(true)->save(input('post.'))) {
		return '用户[ ' . $user->nickname . ':' . $user->id . ' ]新增成功';
		} else {
		return $user->getError();
		}
	}
	public function delete(){
		return 'please log in!';
	}
	public function create(){
		return view();
	}
	public function update(){
		return 'please log in!';
	}
	public function read($id='1')
    {
		$user = UserModel::get($id);
		echo $user->nickname . '<br/>';
		echo $user->email . '<br/>';
		echo date('Y/m/d', $user->birthday) . '<br/>';
    }
}

?>