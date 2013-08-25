<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Panel';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Panel',
);
?>
<h1>Panel</h1>

<p>
Widget representation the Panel component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/panel.php">http://www.jeasyui.com/documentation/panel.php</a>
</p>

<h2>Example</h2>

<div class="example">
<?php
$this->widget('ext.yii-easyui.widgets.EuiPanel', array(
	'title' => 'My Panel',	
	'iconCls'=> 'icon-save',
	'closable' => true,
	'collapsible'=> false,
	'style'=> 'height:150px'		
));
?>
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
$this->widget('ext.yii-easyui.widgets.EuiPanel', array(
	'title' => 'My Panel',	
	'iconCls'=> 'icon-save',
	'closable' => true,
	'collapsible'=> false,
	'style'=> 'height:150px'		
));
</script>
