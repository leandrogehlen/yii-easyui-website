<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - LinkButton';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'LinkButton',
);
?>
<h1>Linkbutton</h1>

<p>
Widget representation the Linkbutton component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/linkbutton.php">http://www.jeasyui.com/documentation/linkbutton.php</a>
</p>


<h2>Example</h2>

<div class="example">
<?php

$this->widget('ext.yii-easyui.widgets.EuiLinkButton', array(
	'iconCls'=> 'icon-add', 
	'plain' => false,
	'text' => 'Add'
));
$this->widget('ext.yii-easyui.widgets.EuiLinkButton', array(
	'iconCls'=> 'icon-edit', 
	'plain' => false,
	'text' => 'Edit'
));
$this->widget('ext.yii-easyui.widgets.EuiLinkButton', array(
	'iconCls'=> 'icon-remove', 
	'plain' => false,
	'text' => 'Remove'
));
?> 
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
$this->widget('ext.yii-easyui.widgets.EuiLinkButton', array(
	'iconCls'=> 'icon-add', 
	'plain' => false,
	'text' => 'Add'
));
$this->widget('ext.yii-easyui.widgets.EuiLinkButton', array(
	'iconCls'=> 'icon-edit', 
	'plain' => false,
	'text' => 'Edit'
));
$this->widget('ext.yii-easyui.widgets.EuiLinkButton', array(
	'iconCls'=> 'icon-remove', 
	'plain' => false,
	'text' => 'Remove'
));
]]>
</script>


