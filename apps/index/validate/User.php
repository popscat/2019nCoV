<?php
namespace app\index\validate;

use think\Validate;

class User extends Validate
{
	//验证规则
	protected $rule = [
	    'studentid' => 'require|alphaNum|length:10',
	    'phone' => 'require|number|length:11',
	    'classnumber' => 'require|alphaNum|length:8',
		'name'     => 'require|length:10',
		'email'     => 'email',

	]
}

>