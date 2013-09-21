<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - Slider';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Slider',
);
?>
<h1>Slider</h1>

<p>
Widget representation the Slider component.
</p>

<p>
See more details: <a href="http://www.jeasyui.com/documentation/slider.php">http://www.jeasyui.com/documentation/slider.php</a>
</p>

<h2>Example</h2>

<div class="example">

<?php $this->widget('ext.yii-easyui.widgets.EuiSlider', array(
	'showTip' => true,
	'rule' => array(0,'|',25,'|',50,'|',75,'|',100)
));?>

</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
$this->widget('ext.yii-easyui.widgets.EuiSlider', array(
	'showTip' => true,
	'rule' => array(0,'|',25,'|',50,'|',75,'|',100)
))
]]>
</script>

