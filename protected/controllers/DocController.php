<?php

class DocController extends Controller
{
	public $layout='//layouts/column2';
	
	public $menu = array(
		array('label'=> 'Base', 'items'=> array(				
			array('label'=>'Pagination', 'url'=>array('/doc/page', 'view'=>'pagination')),
			array('label'=>'Searchbox', 'url'=>array('/doc/page', 'view'=>'searchbox')),
			array('label'=>'Progressbar', 'url'=>array('/doc/page', 'view'=>'progressbar')),
		)),
			
		array('label'=> 'Layout', 'items'=> array(
			array('label'=>'Panel', 'url'=>array('/doc/page', 'view'=>'panel')),
			array('label'=>'Tabs', 'url'=>array('/doc/page', 'view'=>'tabs')),
			array('label'=>'Accordion', 'url'=>array('/doc/page', 'view'=>'accordion')),
			array('label'=>'Layout', 'url'=>array('/doc/page', 'view'=>'layout')),
		)),
			
		array('label'=> 'Menu and Button', 'items'=> array(
			array('label'=>'Menu', 'url'=>array('/doc/page', 'view'=>'menu')),			
			array('label'=>'Linkbutton', 'url'=>array('/doc/page', 'view'=>'linkbutton')),
			array('label'=>'Menubutton', 'url'=>array('/doc/page', 'view'=>'menubutton')),
			array('label'=>'Splitbutton', 'url'=>array('/doc/page', 'view'=>'splitbutton')),
		)),
			
		array('label'=> 'Form', 'items'=> array(
			array('label'=>'Validatebox', 'url'=>array('/doc/page', 'view'=>'validatebox')),
			array('label'=>'Combobox', 'url'=>array('/doc/page', 'view'=>'combobox')),
			array('label'=>'Combotree', 'url'=>array('/doc/page', 'view'=>'combotree')),
			array('label'=>'Numberbox', 'url'=>array('/doc/page', 'view'=>'numberbox')),
			array('label'=>'Datebox', 'url'=>array('/doc/page', 'view'=>'datebox')),
		)),
			
		array('label'=> 'DataGrid and Tree', 'items'=> array(
			array('label'=>'Datagrid', 'url'=>array('/doc/page', 'view'=>'datagrid')),			
		)),
		
		array('label'=> 'Window', 'items'=> array(
			array('label'=>'Window', 'url'=>array('/doc/page', 'view'=>'window')),
		)),
	);
	
	public $menuLayout = array(
						
	);
	
	
	public function actions()
	{
		return array(				
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
	
	public function init()
	{
		parent::init();
		
		$cs = Yii::app()->clientscript;							
		$cs->registerCssFile( Yii::app()->baseUrl . '/js/syntaxhighlighter/styles/shCore.css' );
		$cs->registerCssFile( Yii::app()->baseUrl . '/js/syntaxhighlighter/styles/shCoreDefault.css' );
		$cs->registerCssFile( Yii::app()->baseUrl . '/js/syntaxhighlighter/styles/shThemeDefault.css' );
		
		$cs->registerScriptFile( Yii::app()->baseUrl . '/js/syntaxhighlighter/scripts/shCore.js');
		$cs->registerScriptFile( Yii::app()->baseUrl . '/js/syntaxhighlighter/scripts/shBrushJScript.js');
		$cs->registerScriptFile( Yii::app()->baseUrl . '/js/syntaxhighlighter/scripts/shAutoloader.js');
		$cs->registerScriptFile( Yii::app()->baseUrl . '/js/syntaxhighlighter/scripts/shBrushCss.js');
		$cs->registerScriptFile( Yii::app()->baseUrl . '/js/syntaxhighlighter/scripts/shBrushPhp.js');
		$cs->registerScriptFile( Yii::app()->baseUrl . '/js/syntaxhighlighter/scripts/shBrushXml.js');
		
		
		$cs->registerScript('syntax', "SyntaxHighlighter.all()");
	}
		
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');		
	}	
	
	public function actionComboProducts() 
	{
		echo CJSON::encode( Product::model()->findAll(array('limit'=>10)) );	
	}
	
	public function actionComboTree()
	{
		$tree = array(
			array('id' => 1, 'text'=> 'Folder 1', 'children' => array(
				array('id' => 2, 'text'=> 'file 1'),
				array('id' => 3, 'text'=> 'file 2'),
				array('id' => 4, 'text'=> 'Folder 2', 'children' => array(
					array('id' => 7, 'text'=> 'File 3', 'iconCls' => 'icon-reload'),
					array('id' => 8, 'text'=> 'File 4')
				))
			)),
			array('id' => 4, 'text'=> 'Languages', 'children' => array(
				array('id' => 5, 'text'=> 'Java'),
				array('id' => 6, 'text'=> 'PHP')
			))
		);
		echo CJSON::encode( $tree );
	}
	
	public function actionProducts() 
	{
		$params = array();
		
		if(isset($_REQUEST['rows']) && isset($_REQUEST['page'])) 
		{
			$limit = $_REQUEST['rows'];
			$params = array('limit'=>$limit, 'offset'=>($_REQUEST['page']-1) * $limit);			
		}		

		if (isset($_REQUEST['sort'])) 
		{
			$sort = $_REQUEST['sort'];
			$direction = (isset($_REQUEST['order'])) ? $_REQUEST['order'] : "";
			$params['order'] = Product::model()->getTableAlias(true).".". $sort." ".$direction;	
		}
						
		echo CJSON::encode( array ('total' => Product::model()->count(), 'rows' => Product::model()->findAll($params)) );
	}
}