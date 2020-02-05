<?php
namespace app\index\validate;

use think\Validate;

class User extends Validate
{
	//验证规则
	protected $rule = [
	    'studentid|学号' => 'require|alphaNum|length:10',
	    'phone|手机号' => 'require|number|length:11',
	    'classid|班号' => 'require|alphaNum|length:8',
		'name|姓名'     => 'require',
		'email'     => 'email',

	];
}

?>