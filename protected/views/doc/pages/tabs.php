<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - Tabs';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Tabs',
);
?>
<h1>Tabs</h1>

<p>
Widget representation the Tabs component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/tabs.php">http://www.jeasyui.com/documentation/tabs.php</a>
</p>

<h2>Example</h2>

<div class="example">
<?php
$this->widget('ext.yii-easyui.widgets.EuiTabs', array(
	'style' => 'height:150px',
	'pages' => array(
		array('title' => 'First tab'),
		array('title' => 'Second tab', 'iconCls' =>'icon-reload'),
		array('title' => 'Closable', 'closable' => true)
	)		
));
?>
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
$this->widget('ext.yii-easyui.widgets.EuiTabs', array(
	'style' => 'height:250px',
	'pages' => array(
		array('title' => 'First tab'),
		array('title' => 'Second tab', 'iconCls' =>'icon-reload'),	
		array('title' => 'Closable', 'closable' => true)		
	)		
));
</script>

