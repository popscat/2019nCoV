<?php
namespace app\api\controller;

use think\Controller;
use think\controller\Rest;
use think\Request;
use app\api\model\Article as ArticleModel;
use think\Route;


class Article extends Rest
{
	public function index()
	{

		return dump(Route::name());
	}
	public function create()
	{
		return 'Hello World! create page';
	}
	public function save(){
		$article= new ArticleModel;
		if ($article->allowField(true)->save($_POST))
		{
			return ['status' => 'Success','info' => '文章新增成功'];
		} else {
			return ['status' => 'Failed','info' => $article->getError()];
		}
	}
	public function update($id=''){
		$article= ArticleModel::get($id);
		$ary= Request::instance()->put();
		if ($article&& $article->update($ary,['id' =>$id]))
	    {
			return ['status' => 'Success','info' => '文章更新成功'];
		} else {
			return ['status' => 'Failed','info' => $article->getError()];
		}
	}
	public function delete($id=''){
		

		if (ArticleModel::destroy($id))
	    {
			return ['status' => 'Success','info' => '文章删除成功'];
		} else {
			return ['status' => 'Failed','info' => '文章删除失败'];
		}
	}
	public function read($id=''){
		$article = ArticleModel::get($id);
		if ($article)
		{
			return ['status' => 'Success','info' => $article->toArray()];
		} else {
			return ['status' => 'Failed','info' => '文章读取失败'];
	    }
	}
	
	
}