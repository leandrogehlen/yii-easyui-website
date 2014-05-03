<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - DateBox';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'DateBox',
);
?>
<h1>Datebox</h1>

<p>
Widget representation the Datebox components.<br/>
</p>

<p>
See more details<br/> 
<a href="http://www.jeasyui.com/documentation/datebox.php">http://www.jeasyui.com/documentation/datebox.php</a><br/>
<a href="http://www.jeasyui.com/documentation/dateboxtime.php">http://www.jeasyui.com/documentation/datetimebox.php</a>
</p>

<h2>Example</h2>

<div class="example">
	<div class="form">
		<div>
		<label>Date</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiDateBox', array(
			'required' => true					
		));?>
		</div>			
		<div>
		<label>Date/Time</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiDatetimeBox', array(
			'showSeconds' => false					
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
		<label>Date</label>
		<?php echo "<?php "?>$this->widget('ext.yii-easyui.widgets.EuiDateBox', array(
			'required' => true					
		));
		<?php echo "?>\n" ?>
		</div>			
		<div>
		<label>Date/Time</label>
		<?php echo "<?php "?>$this->widget('ext.yii-easyui.widgets.EuiDatetimeBox', array(
			'showSeconds' => false					
		));
		<?php echo "?>\n" ?>
		</div>
	</div>
</div>
]]>
</script>

