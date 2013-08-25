<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - Accordion';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Accordion',
);
?>
<h1>Accordion</h1>

<p>
Widget representation the Accordion component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/accordion.php">http://www.jeasyui.com/documentation/accordion.php</a>
</p>

<h2>Example</h2>

<div class="example">
<?php
$this->widget('ext.yii-easyui.widgets.EuiAccordion', array(
	'style' => 'width:300px;height:200px;',
	'items' =>array(
		array('title'=>'Title1'),
		array('title'=>'Title2'),
		array('title'=>'Title3')
	)		
));
?> 
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
$this->widget('ext.yii-easyui.widgets.EuiAccordion', array(
	'style' => 'width:300px;height:200px;',
	'items' =>array(
		array('title'=>'Title1'),
		array('title'=>'Title2'),
		array('title'=>'Title3')
	)		
));
]]>
</script>

