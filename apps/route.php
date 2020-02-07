<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;

#Route::get('api/:id','api/index/read');
#Route::put('api/:id','api/index/update');
Route::delete('api//:id','api/index/delete');
Route::resource('api/','api/article');

/*
return [
    #'__pattern__' => [
    #    'name' => '\w+',
	#	'id' => '\d+',
    # ],
      
	'user/'            => 'index/user/index',
	'user/create'      => 'index/user/create',
	'user/add'         => ['index/user/add',['method' => 'POST']],
	'user/add_list/'    => 'index/user/addList',
	'user/read/'    => 'index/user/read',
	'user/update/'  => ['index/user/update',['method' => 'POST|GET']],
	'user/delete/'  => ['index/user/delete',['method' => 'POST|GET']],
	#'user/:id'         => 'index/user/read',
	'[classes]' =>[
		 'create/' => 'classes/create',
		 'list/' => 'classes/list',
		 '__miss__' => 'classes/index'
	],
	
	];
	*/
#	'[blog]'  =>[
#	    ':year/:month'  => ['blog/archive',['method' => 'get'],['year'=>'\d{4}','month'=>'\d{2}']],
#	    ':id'  => ['blog/get',['method' => 'get'],['id' => '\d+']],
#	    ':name'  => ['blog/read',['method' => 'get'],['name' => '\w+']]
#	
#	]

	#[
    #'[hello]'     => [
    #    ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
    #    ':name' => ['index/hello', ['method' => 'post']],
    #],
