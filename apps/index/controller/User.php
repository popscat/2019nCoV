<?php
namespace app\index\controller;

use app\index\model\User as UserModel;
use app\index\model\Classes;
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
		$data = Request::instance()->except(['name','email','__token__',]);
		dump($data);

		if (!$classes = Classes::get(Request::instance()->only('classes_id'))){
			$classes = new Classes;
			$classes->save([Request::instance()->only('classes_id')]);
		}
		$user = new UserModel;
        $classes->students()->validate(true)->save($data);
        return 'Success';
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
    public function read($studentid='')
	{
		$user = UserModel::get($studentid);
		
	}
	
	public function update($data)
	{
		$user = UserModel::get($data['studentid']);
		/*
		   默认情况下，查询模型数据后返回的模型示例执行 save 操作都
		   是执行的数据库 update 操作，如果你需要实例化执行 save 执
		   行数据库的 insert 操作，请确保在save方法之前调用isUpdate方法：
        $user->isUpdate(false)->save();
		    ActiveRecord 模式的更新数据方式需要首先读取对应的数据，
			如果需要更高效的方法可以把update方法
		改成：
			// 更新用户数据
			public function update($id)
			{
			$user['id'] = (int) $id;
			$user['nickname'] = '刘晨';
			$user['email'] = 'liu21st@gmail.com';
			$result = UserModel::update($user);
			return '更新用户成功';
			}
		
		*/
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