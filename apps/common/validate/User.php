<?php

namespace app\index\validate;

use think\Validate;

class User extends Validate
{
    //验证规则
    protected $rule = [
        'num|学号' => 'require|unique:user|alphaNum|length:10',
        'phone|手机号' => 'require|number|length:11',
        'classes_num|班号' => 'require|alphaNum|length:8',
        'email' => 'email',

    ];
}

?>