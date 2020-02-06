<?php
namespace app\index\validate;

use think\Validate;

class Classes extends Validate
{
	//验证规则
	protected $rule = [
	    'classes_num|班号' => 'require|unique:classes|number|length:8',
	];
}

?>