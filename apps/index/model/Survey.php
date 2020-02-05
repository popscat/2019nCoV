<?php
namespace app\index\model;

use think\Model;

class Survey extends Model
{
	public function classes()
	{
		return $this->belongsTo('Classes');
	}
}

?>