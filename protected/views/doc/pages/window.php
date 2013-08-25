<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Window';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Window',
);
?>
<h1>Window</h1>

<p>
Widget representation the Window component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/window.php">http://www.jeasyui.com/documentation/window.php</a>
</p>

<h2>Usage Example</h2>

<div class="example" style="height:250px">
<?php
$this->widget('ext.yii-easyui.widgets.EuiWindow', array(
	'id' => 'win',
	'title' => 'Basic Window',
	'style' => 'width:500px;height:250px;padding:10px;'			
));
?>
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
$this->widget('ext.yii-easyui.widgets.EuiWindow', array(
	'id' => 'win',
	'title' => 'Basic Window',
	'style' => 'width:500px;height:200px;padding:10px;',		
));
</script>

