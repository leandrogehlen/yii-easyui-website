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
			array('label'=>'Combogrid', 'url'=>array('/doc/page', 'view'=>'combogrid')),
			array('label'=>'Combotree', 'url'=>array('/doc/page', 'view'=>'combotree')),
			array('label'=>'Numberbox', 'url'=>array('/doc/page', 'view'=>'numberbox')),
			array('label'=>'Datebox', 'url'=>array('/doc/page', 'view'=>'datebox')),
			array('label'=>'Spinner', 'url'=>array('/doc/page', 'view'=>'spinner')),
			array('label'=>'Slider', 'url'=>array('/doc/page', 'view'=>'slider')),
		)),
			
		array('label'=> 'DataGrid and Tree', 'items'=> array(
			array('label'=>'Datagrid', 'url'=>array('/doc/page', 'view'=>'datagrid')),
			array('label'=>'Tree', 'url'=>array('/doc/page', 'view'=>'tree')),
			array('label'=>'Treegrid', 'url'=>array('/doc/page', 'view'=>'treegrid')),
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
	
	public function actionTree()
	{
		$tree = array(
			array('id' => 1, 'text'=> 'Folder 1', 'attrs' => 'rxw', 'children' => array(
				array('id' => 2, 'text'=> 'file 1', 'attrs' => 'r-w'),
				array('id' => 3, 'text'=> 'file 2', 'attrs' => 'r--'),
				array('id' => 4, 'text'=> 'Folder 2', 'attrs' => '-xw', 'children' => array(
					array('id' => 7, 'text'=> 'File 3', 'attrs' => '--w', 'iconCls' => 'icon-reload'),
					array('id' => 8, 'text'=> 'File 4', 'attrs' => '-x-',)
				))
			)),
			array('id' => 4, 'text'=> 'Languages', 'attrs' => 'rw-', 'children' => array(
				array('id' => 5, 'text'=> 'Java', 'attrs' => 'rwx'),
				array('id' => 6, 'text'=> 'PHP', 'attrs' => 'r--')
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
						
		echo  $this->exportData(Product::model()->findAll($params), Product::model()->count());
	}
		
}