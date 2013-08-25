<?php

class SiteController extends Controller
{
	public function actions()
	{
		return array(										
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
	
	public function actionIndex()
	{		
		$this->render('index');		
	}

	
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	public function actionUpgrade() 
	{
		$commandPath = Yii::app()->getBasePath() . DIRECTORY_SEPARATOR . 'commands';
		$runner = new CConsoleCommandRunner();
		$runner->addCommands($commandPath);
		
		$commandPath = Yii::getFrameworkPath() . DIRECTORY_SEPARATOR . 'cli' . DIRECTORY_SEPARATOR . 'commands';
		$runner->addCommands($commandPath);
		$args = array('yiic', 'migrate', '--interactive=0');
		
		ob_start();		
		$runner->run($args);
		echo  str_replace("\n", "<br>", htmlentities(ob_get_clean(), null, Yii::app()->charset));
	}
}