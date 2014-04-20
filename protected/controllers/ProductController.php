<?php

Yii::import('application.controllers.DemoController');
 
class ProductController extends DemoController
{	
			
	public function init()
	{
		parent::init();
		EuiJavaScript::registerCrudScripts();
	}
	
	/**
	 * Render index page
	 */
	public function actionIndex()
	{		
		$this->render('index', array('model' => Product::model()));
	}

	/**
	 * Lists all models.
	 */
	public function actionList()
	{					
		$q = (isset($_REQUEST['__q'])) ? $_REQUEST['__q'] : null;
						
		$dataProvider = Product::model()->search($q);						
		
		echo $this->exportData($dataProvider);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID o'model'=>$model,f the model to be displayed
	 */
	public function actionView($id)
	{
		echo $this->exportModel($this->loadModel($id));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{						
		$model=new Product();		
		$this->performAjaxValidation($model);
		
		
		

		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];			
			if($model->save())
				echo CJSON::encode(array('success'=>true));
			else 
				echo CJSON::encode(array('success'=>false));
		}	
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);								
		$this->performAjaxValidation($model);
				
		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];
			if($model->save())
				echo CJSON::encode(array('success'=>true));			
		}
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model = $this->loadModel($id);			
		
		if (!$model->delete())
			echo CJSON::encode(array('success' => false, 'error'=> Yii::t('base', 'Registro não encontrado')));
		else		
			echo CJSON::encode(array('success' => true));
	}
	

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Product the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{		
		$model=Product::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');	
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Product $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{								
		if(isset($_POST['ajax']) && $_POST['ajax']==='product-form')
		{			
			$errors = CActiveForm::validate($model);
			if (is_array($errors) && !empty($errors))
			{
				echo $errors;	
				Yii::app()->end();
			}
		}
	}
}
