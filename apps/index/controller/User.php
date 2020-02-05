<?php
namespace app\index\controller;

use app\index\model\User as UserModel;
use app\index\model\Profile;
use think\Controller;
use think\Request;

class User extends Controller{
	public function index(){
		return view('user/index');
	}
	
	
	public function create(){
		return view('user/create');
	}
	
	public function add(){		
        $user = new UserModel();
		if ($user->allowField(true)->validate(true)->save($_POST)){
			$profile = new Profile($_POST);
			$profile->allowField(true);
			if ($user->profile()->save($profile)){
				return 'Success';
		    } else {
				return $user->profile()->getError();
		    }

	    } else {
		    return $user->getError();
		}
		
	}
	/* 
	   输入特定格式$str 通过自定义函数 转换$str 为$list完成功能，未实现。
	public function addList($list){
		$user = new UserModel;
		if ($user->saveAll($list)) {
			return '用户批量新增成功，共有'.count($list).'名用户';
		} else {
			return $user->getError();
		}
	}
	*/
    public function read()
	{
		$data = input('get.');
		$user = UserModel::get($data,'profile');
		#$user->profile()->save();
		$this->assign('user',$user);
		return $this->fetch('user/read');

	}
	
	public function update($data)
	{
		$user = UserModel::get($data['studentid']);
		$user['id'] = (int) $id;
		$user['nickname'] = '刘晨';
		$user['email'] = 'liu21st@gmail.com';
		$result = UserModel::update($user);
		return '更新用户成功';
	}
	
	public function delete(){
		dump(input('get.'));
		$data=input('get.');
		$result = UserModel::destroy($data);
		if ($result){
			return '删除成功！';
			
		} else {
			return '删除失败！';
		}
	}
}