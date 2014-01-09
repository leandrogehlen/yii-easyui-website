<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - Combobox';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Combobox',
);
?>
<h1>Combobox</h1>

<p>
Widget representation the Combobox component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/Combobox.php">http://www.jeasyui.com/documentation/Combobox.php</a>
</p>

<h2>Example</h2>

<div class="example">
	<div class="form">
		<div>
		<label>Simple</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiCombobox', array(
			'panelHeight' => 'auto',
			'options' => array(
				array('description' =>'item 1', 'value' => 1),
				array('description' =>'item 2', 'value' => 2),
				array('description' =>'item 3', 'value' => 3)
			)		
		));?>
		</div>
		<div>
		<label>Remote</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiCombobox', array(
			'textField' => 'name',
			'valueField' => 'product_id',
			'url' => $this->createUrl('comboProducts')
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
		<label>Simple</label>
		<?php echo "<?php " ?>$this->widget('ext.yii-easyui.widgets.EuiCombobox', array(
			'panelHeight' => 'auto',
			'options' => array(
				array('description' =>'item 1', 'value' => 1),
				array('description' =>'item 2', 'value' => 2),
				array('description' =>'item 3', 'value' => 3)
			)		
		));
		<?php echo "?>\n" ?>
		</div>
		<div>
		<label>Remote</label>
		<?php echo "<?php " ?> $this->widget('ext.yii-easyui.widgets.EuiCombobox', array(
			'textField' => 'name',
			'valueField' => 'product_id',
			'url' => $this->createUrl('comboProducts')
		));
		<?php echo "?>\n" ?>
		</div>			
	</div>
</div>
]]>
</script>

