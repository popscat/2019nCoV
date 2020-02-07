<?php
namespace app\index\controller;

use app\index\model\User as UserModel;
use app\index\model\Classes as ClassModel;
use think\Controller;
use think\Request;

class User extends Controller{
	public function index(){
		return view('user/index',['title'=>'用户首页']);
	}
	
	
	public function create(){
		return view('user/create',['title' => '用户注册']);
	}
	
	public function add(){		
        $user = new UserModel();
        if($user->allowField(true)->validate(true)->save($_POST))
		{
			if (!$classes = ClassModel::get(['classes_num' =>$user->classes_num]))
			{
				$classes = new ClassModel;
				$classes->classes_num = $user->classes_num;
				$classes->validate(true)->save();				
			}
			$user->classes_id = $classes->id;
			$user->save();
			return 'Success!';
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
		$key = input('get');
		$user = UserModel::get($key) or die(1);
		if (isset($_SESSION['user_id']) && $_SESSION['user_id']==$user->id){		
		if($data = input('post.')){$user->save($data);}		
		return view('user/update',['user' => $user]);}
		return view('user/read',['user' => $user]);

	}
	
	public function update()
	{    
	    $data = input('post.');
		if ($user = UserModel::get($data))
		{               
		    $result = $user->validate(true)->update(Request::instance()->only(['classes_num','phone','condition']));
			return '更新用户成功';
		}
		
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