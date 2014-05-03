<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - NumberBox';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'NumberBox',
);
?>
<h1>Numberbox</h1>

<p>
Widget representation the Numberbox component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/numberbox.php">http://www.jeasyui.com/documentation/numberbox.php</a>
</p>

<h2>Example</h2>

<div class="example">
	<div class="form">
		<div>
		<label>Min 10, Max 100</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiNumberBox', array(
			'min' => 10,
			'max' => 100,			
			'value' => 100		
		));?>
		</div>
		<div>
		<label>Prefix</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiNumberBox', array(
			'prefix' => '€ ',
			'precision' => 2,
			'value' => 100		
		));?>
		</div>			
		<div>
		<label>Suffix</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiNumberBox', array(
			'suffix' => ' €',
			'precision' => 2,
			'value' => 100		
		));?>
		</div>
	</div>
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php xml; toolbar: false">
<![CDATA[
<div class="example">
	<div class="form">
		<div>
		<label>Min 10, Max 100</label>
		<?php echo "<?php "?>$this->widget('ext.yii-easyui.widgets.EuiNumberBox', array(
			'min' => 10,
			'max' => 100,			
			'value' => 100		
		));
		<?php echo "?>\n" ?>
		</div>
		<div>
		<label>Prefix</label>
		<?php echo "<?php "?>$this->widget('ext.yii-easyui.widgets.EuiNumberBox', array(
			'prefix' => '€ ',
			'precision' => 2,
			'value' => 100		
		));
		<?php echo "?>\n" ?>
		</div>			
		<div>
		<label>Suffix</label>
		<?php echo "<?php "?>$this->widget('ext.yii-easyui.widgets.EuiNumberBox', array(
			'suffix' => ' €',
			'precision' => 2,
			'value' => 100		
		));
		<?php echo "?>\n" ?>
		</div>
	</div>
</div>
]]>
</script>

