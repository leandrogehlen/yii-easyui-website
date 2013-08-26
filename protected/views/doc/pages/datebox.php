<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - Datebox';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Datebox',
);
?>
<h1>Datebox</h1>

<p>
Widget representation the Datebox component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/datebox.php">http://www.jeasyui.com/documentation/datebox.php</a>
</p>

<h2>Example</h2>

<div class="example">
	<div class="form">
		<div>
		<label>Date</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiDatebox', array(
			'required' => true					
		));?>
		</div>			
		<div>
		<label>Date/Time</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiDatetimebox', array(
			'showSeconds' => false					
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
		<label>Date</label>
		<?php echo "<?php "?>$this->widget('ext.yii-easyui.widgets.EuiDatebox', array(
			'required' => true					
		));
		<?php echo "?>\n" ?>
		</div>			
		<div>
		<label>Date/Time</label>
		<?php echo "<?php "?>$this->widget('ext.yii-easyui.widgets.EuiDatetimebox', array(
			'showSeconds' => false					
		));
		<?php echo "?>\n" ?>
		</div>
	</div>
</div>
]]>
</script>

