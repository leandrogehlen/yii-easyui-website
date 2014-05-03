<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - Spinner';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Spinner',
);
?>
<h1>Spinner</h1>

<p>
Widget representation the Spinner component.
</p>

<p>
See more details:<br/> 
<a href="http://www.jeasyui.com/documentation/numberspinner.php">http://www.jeasyui.com/documentation/numberspinner.php</a><br/>

<a href="http://www.jeasyui.com/documentation/timespinner.php">http://www.jeasyui.com/documentation/timespinner.php</a>
</p>

<h2>Example</h2>

<div class="example">
	<div class="form">
		<div>
		<label>Number</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiNumberSpinner', array(
			'min' => 10,
			'max' => 100,
			'increment' => 2					
		));?>
		</div>					
		<div>
		<label>Time</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiTimeSpinner', array(
			'showSeconds' => true					
		));?>
		</div>
	</div>
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
<div class="example">
	<div class="form">
		<div>
		<label>Number</label>
		<?php echo "<?php "?>$this->widget('ext.yii-easyui.widgets.EuiNumberSpinner', array(
			'min' => 10,
			'max' => 100,
			'increment' => 2					
		));
		<?php echo "?>\n" ?>
		</div>					
		<div>
		<label>Time</label>
		<?php echo "<?php "?>$this->widget('ext.yii-easyui.widgets.EuiTimeSpinner', array(
			'showSeconds' => true					
		));
		<?php echo "?>\n" ?>
		</div>
	</div>
</div>
]]>
</script>

