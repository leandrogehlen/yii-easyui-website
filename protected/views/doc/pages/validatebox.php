<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - ValidateBox';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'ValidateBox',
);
?>
<h1>Validatebox</h1>

<p>
Widget representation the Validatebox component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/Validatebox.php">http://www.jeasyui.com/documentation/Validatebox.php</a>
</p>

<h2>Example</h2>

<div class="example">
	<div class="form">
		<div>
		<label>Required</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiValidateBox', array(
			'required' => true		
		));?>
		</div>
		<div>
		<label>Email</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiValidateBox', array(
			'validType' => 'email'		
		));?>
		</div>
		<div>
		<label>Url</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiValidateBox', array(
			'validType' => 'url'		
		));?>
		</div>
		<div>
		<label>Length between 0 and 5</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiValidateBox', array(
			'validType' => 'length[0,5]'		
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
		<label>Required</label>
		<?php echo "<?php" ?> $this->widget('ext.yii-easyui.widgets.EuiValidateBox', array(
			'required' => true		
		));
		<?php echo "?>\n" ?>
		</div>
		<div>
		<label>Email</label>
		<?php echo "<?php" ?> $this->widget('ext.yii-easyui.widgets.EuiValidateBox', array(
			'validType' => 'email'		
		));
		<?php echo "?>\n" ?>
		</div>
		<div>
		<label>Url</label>
		<?php echo "<?php" ?> $this->widget('ext.yii-easyui.widgets.EuiValidateBox', array(
			'validType' => 'url'		
		));
		<?php echo "?>\n" ?>
		</div>
		<div>
		<label>Length between 0 and 5</label>
		<?php echo "<?php" ?> $this->widget('ext.yii-easyui.widgets.EuiValidateBox', array(
			'validType' => 'length[0,5]'		
		));
		<?php echo "?>\n" ?>
		</div>
	</div>
</div>
]]>
</script>

