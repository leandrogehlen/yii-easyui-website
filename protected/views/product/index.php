<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Products',
);	
Yii::app()->clientScript->registerScript('search', "
var crud = new Crud({
	route: '".$this->createUrl('index')."',
	grid: $('#product-grid'),
	window: $('#product-win')	
});
$('#btn-add').click(function(){
	crud.add();
});
$('#btn-edit').click(function(){
	crud.edit();
});
$('#btn-remove').click(function(){
	crud.remove();
});
$('#btn-refresh').click(function(){
	crud.refresh();
});
$('#btn-save').click(function(){
	crud.save();
});
$('#btn-cancel').click(function(){
	$('#product-win').dialog('close');
});	
			
$('#txt-search').searchbox({
	searcher: function(value, name){
		crud.search(value);		
	}
});			
");
?>

<div id="tb" style="width: 100%; height: 30px; padding-top: 6px">
	<div class="crudbar-left" style="float: left;">
		<?php 
		$this->widget('ext.yii-easyui.widgets.EuiLinkbutton', array(
			'id' => 'btn-add',
			'text' => 'Add',
			'iconCls' => 'icon-add'
		));
		$this->widget('ext.yii-easyui.widgets.EuiLinkbutton', array(
			'id' => 'btn-edit',
			'text' => 'Edit',
			'iconCls' => 'icon-edit'
		));		
		$this->widget('ext.yii-easyui.widgets.EuiLinkbutton', array(
			'id' => 'btn-remove',
			'text' => 'Remove',
			'iconCls' => 'icon-remove'
		));
		$this->widget('ext.yii-easyui.widgets.EuiLinkbutton', array(
			'id' => 'btn-refresh',
			'text' => 'Refresh',
			'iconCls' => 'icon-reload'
		));
		?>    	
	</div>
	<div style="padding-right:6px; float: right;">
		<?php
		$this->widget('ext.yii-easyui.widgets.EuiSearchbox', array(
			'id'=>'txt-search',
			'prompt'=> 'Please Input Value',			
		));
		?>
	</div>
</div>

<h1>Products</h1>

<?php $this->widget('ext.yii-easyui.widgets.EuiDataGrid', array(
	'id' => 'product-grid',
	'style' => 'width:auto; height: 200px',
	'url' => $this->createUrl('list'),
	'singleSelect' => true,
	'toolbar' => '#tb',
	'idField' => 'id',		
	'pagination' => true,
	'columns' => array(
		array('title' => Product::model()->getAttributeLabel('id'), 'field'=>'id', 'width'=> 10, 'sortable'=>true),
		array('title' => Product::model()->getAttributeLabel('name'), 'field'=>'name', 'width'=> 30, 'sortable'=>true),
		array('title' => Product::model()->getAttributeLabel('price'), 'field'=>'price', 'width'=> 20, 'sortable'=>true),
		array('title' => Product::model()->getAttributeLabel('status'), 'field'=>'status', 'width'=> 10),
		array('title' => Product::model()->getAttributeLabel('description'), 'field'=>'description', 'width'=> 15),
		array('title' => Product::model()->getAttributeLabel('category'), 'field'=>'category_name', 'width'=> 15, 'sortable' => true)
	)	
));
?>

<?php 
$this->beginWidget('ext.yii-easyui.widgets.EuiWindow', array(
	'id'=> 'product-win',
	'style'=> 'width:700px',
	'closed' => true,
	'modal' => true,
	'buttons' => '#dlg-buttons'	
));

$this->renderPartial('_form', array('model'=>$model));

$this->endWidget();  
?>

 <div id="dlg-buttons">
 <?php 
 	$this->widget('ext.yii-easyui.widgets.EuiLinkbutton', array(
		'id' => 'btn-save',		
		'text' => 'Save',
		'iconCls' => 'icon-save',
		'plain' => false
	));

	$this->widget('ext.yii-easyui.widgets.EuiLinkbutton', array(
		'id' => 'btn-cancel',		
		'text' => 'Cancel',
		'iconCls' => 'icon-cancel',
		'plain' => false				
	));
?>	
</div>


