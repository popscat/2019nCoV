<?php
namespace app\index\controller;

use app\index\model\Survey as SurveyModel;
use think\Controller;

class Survey extends Controller
{
	public function index()
	{
		return view();
	}
	public function detail($class_id='')
	{
		$survey = SurveyModel::get($class_id);
		$this->assign('survey',$survey);
		return $this->fetch('survey/detail');
	}
	public function survey()
	{
		$questions = Questsion::get('1');
		$this->assign('questtions',$questions);		
		return $this->fetch('survey/survey');
	}
}

?>