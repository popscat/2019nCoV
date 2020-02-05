<?php
namespace app\index\model;

use think\Model;

class Question extends Model
{
	protected $type=[
		'create_time' => 'timestamp: Y/M/D',
		'update_time' => 'timestamp: Y/M/D'];
	protected $autoWriteTimestamp =True;
}