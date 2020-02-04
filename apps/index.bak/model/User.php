<?php
namespace app\index\model;

use think\Model;

class User extends Model{
	protected $type=['birthday' => 'timestamp:Y-m-d',];
	protected $createTime = 'create_time';
    protected $updateTime = 'update_time';
	#protected $autoWriteTimestamp = 'datetime';
	protected $insert =['status' => 2];
	protected function getBirthdayAttr($birthday)
	{
		return date('Y-m-d', $birthday);
	}
		protected function getEmailAttr($email)
	{
		return str_replace('@','#',$email);
	}		
	protected function getStatusAttr($value)
	{
		$status=[-1 => '删除', 0=> '禁用', 1 => '正常' ,2 => '待审核'];
		return $status[$value];
	}
	
}

?>