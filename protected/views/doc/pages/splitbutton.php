<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - SplitButton';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'SplitButton',
);
?>
<h1>Splitbutton</h1>

<p>
Widget representation the Splitbutton component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/splitbutton.php">http://www.jeasyui.com/documentation/splitbutton.php</a>
</p>


<h2>Example</h2>

<div class="example">
<?php

$this->widget('ext.yii-easyui.widgets.EuiMenu', array(
	'id' => 'mmedit',
	'items' =>array(
		array('text'=>'Undo', 'iconCls' => 'icon-undo'),		
		array('text'=>'Redo', 'iconCls' => 'icon-redo'),		
	)
));

$this->widget('ext.yii-easyui.widgets.EuiMenu', array(
	'id' => 'mmfile',
	'items' =>array(
		array('text'=>'New'),
		array('text'=>'Save', 'iconCls' => 'icon-save'),
		array('separator'=>true),
		array('text'=>'Exit'),
	)
));
?>

<div style="paddin]]>g:5px;border:1px solid #ddd;">  
<?php 
$this->widget('ext.yii-easyui.widgets.EuiSplitButton', array(
	'text' => 'File',
	'menu' => '#mmfile',				
));

$this->widget('ext.yii-easyui.widgets.EuiSplitButton', array(
	'text' => 'Edit',
	'menu' => '#mmedit',
));
?> 
</div>
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
$this->widget('ext.yii-easyui.widgets.EuiMenu', array(
	'id' => 'mmedit',
	'items' =>array(
		array('text'=>'Undo', 'iconCls' => 'icon-undo'),		
		array('text'=>'Redo', 'iconCls' => 'icon-redo'),		
	)
));

$this->widget('ext.yii-easyui.widgets.EuiMenu', array(
	'id' => 'mmfile',
	'items' =>array(
		array('text'=>'New'),
		array('text'=>'Save', 'iconCls' => 'icon-save'),
		array('separator'=>true),
		array('text'=>'Exit'),
	)
));
?>

<div style="padding:5px;border:1px solid #ddd;">  
<? echo "<?php" ?> 
$this->widget('ext.yii-easyui.widgets.EuiSplitButton', array(
	'text' => 'File',
	'menu' => '#mmfile',				
));

$this->widget('ext.yii-easyui.widgets.EuiSplitButton', array(
	'text' => 'Edit',
	'menu' => '#mmedit',
));
<? echo "?>" ?> 
</div>
]]>
</script>


