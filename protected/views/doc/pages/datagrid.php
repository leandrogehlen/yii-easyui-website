<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - Datagrid';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Datagrid',
);
?>
<h1>Datagrid</h1>

<p>
Widget representation the Datagrid component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/datagrid.php">http://www.jeasyui.com/documentation/datagrid.php</a>
</p>

<h2>Example</h2>

<div class="example">
<?php

$this->widget('ext.yii-easyui.widgets.EuiDataGrid', array(
	'style' => 'width:auto; height: 200px',
	'url' => $this->createUrl('products'),
	'idField' => 'id',
	'pagination' => true,	
	'columns' => array(
		array('title' => Product::model()->getAttributeLabel('id'), 'field'=>'id', 'width'=> 10, 'sortable'=>true),
		array('title' => Product::model()->getAttributeLabel('name'), 'field'=>'name', 'width'=> 30, 'sortable'=>true),
		array('title' => Product::model()->getAttributeLabel('price'), 'field'=>'price', 'width'=> 20, 'sortable'=>true),
		array('title' => Product::model()->getAttributeLabel('status'), 'field'=>'status', 'width'=> 10),
		array('title' => Product::model()->getAttributeLabel('description'), 'field'=>'description', 'width'=> 15),
		array('title' => Product::model()->getAttributeLabel('category'), 'field'=>'category_name', 'width'=> 15)
	)		
));
?>
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
$this->widget('ext.yii-easyui.widgets.EuiDataGrid', array(
	'style' => 'width:600px; height: 200px',
	'url' => $this->createUrl('products'),
	'pagination' => true,
	'columns' => array(
		array('title' => 'Product Id', 'field'=>'product_id', 'width'=> 10, 'sortable'=>true),
		array('title' => 'Name', 'field'=>'name', 'width'=> 30, 'sortable'=>true),
		array('title' => 'Price', 'field'=>'price', 'width'=> 20, 'sortable'=>true),
		array('title' => 'Status', 'field'=>'status', 'width'=> 10),
		array('title' => 'Description', 'field'=>'description', 'width'=> 15),
		array('title' => 'Category', 'field'=>'category_name', 'width'=> 15)
	)		
));
]]>
</script>

<h3> Controller </h3>
<script type="syntaxhighlighter" class="brush: php; toolbar: false">
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
</script>

