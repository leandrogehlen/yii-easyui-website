<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Menubutton';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Menubuttonbutton',
);
?>
<h1>Menubutton</h1>

<p>
Widget representation the Menubutton component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/menubutton.php">http://www.jeasyui.com/documentation/menubutton.php</a>
</p>

<h2>Example</h2>

<div class="example">
	<div style="padding:5px;border:1px solid #ddd;">   
	<?php
	$this->widget('ext.yii-easyui.widgets.EuiMenubutton', array(
		'id' => 'mm',	
		'buttons' =>array(
			array('text'=>'File'),
			array('text'=>'Edit')												
		)		
	));
	?>
	</div>
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
$this->widget('ext.yii-easyui.widgets.EuiMenubutton', array(
	'id' => 'mm',	
	'buttons' =>array(
		array('text'=>'File'),
		array('text'=>'Edit')												
	)		
));
]]>
</script>
   

