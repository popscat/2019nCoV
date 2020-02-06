<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\Classes as ClassModel;

class Classes extends Controller
{
	public function index()
	{
		$list = ClassModel::paginate(3);
		$this->assign('list',$list);
		return $this->fetch('details');
	}
	public function create()
	{   
	    if ($data=input('post.')){
			if (!array_key_exists('str',$data))
			{   
				$classes = new ClassModel;
			    if ($classes->allowField(true)->save($data)){return "Success";}
			} else {
				$dict=explode(',',$data['str']);
				$flag=true;
				foreach($dict as $str)
				{   

                    $ary = explode('|',$str);
					$Class_num = $ary[0];
					$monitor_id = $ary[1];
					$classes = new ClassModel;
					if (!$classes->validate(false)->save(['classes_num' 
					    =>$Class_num,'user_num' =>$monitor_id]))
						{$flag =false;}
				}
						
				return $flag?'Success':'Failed';
				
			}
		}else{
		return view();
	    }
	}


	public function list()
	{    
	    $data = input('get.');
		if ($data && $classes = ClassModel::get($data))
		{   
	        dump($data);
			
			$this->assign('classes',$classes);
			$this->assign('students',$classes->students);
		    return $this->fetch('read');
		} else {
		    return view('index');
		}
		
	}

}