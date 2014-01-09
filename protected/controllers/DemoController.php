<?php

class DemoController extends Controller
{
	public $layout='//layouts/column2';
	
	public $menu = array(
		array('label'=> 'Application', 'items'=> array(				
			array('label'=>'Basic Crud', 'url'=>array('/product/index')),			
		)),
	);	
	
	public function actionIndex()
	{
		$this->render('index');
	}
		
}