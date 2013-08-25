<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Progressbar';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Progressbar'
);
?>
<h1>Pagination</h1>

<p>
Widget representation the Progressbar component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/progressbar.php">http://www.jeasyui.com/documentation/progressbar.php</a>
</p>

<h2>Example</h2>

<div class="example">
<?php
$this->widget('ext.yii-easyui.widgets.EuiProgressbar', array(
	'value'=>'50'
));
?>
</div>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
$this->widget('ext.yii-easyui.widgets.EuiProgressbar', array(
	'value'=>50		
));
]]>
</script>
