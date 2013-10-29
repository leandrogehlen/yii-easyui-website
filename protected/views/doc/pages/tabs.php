<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - Tabs';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Tabs',
);
?>
<h1>Tabs</h1>

<p>
Widget representation the Tabs component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/tabs.php">http://www.jeasyui.com/documentation/tabs.php</a>
</p>

<h2>Example</h2>

<div class="example">
<?php
$this->beginWidget('ext.yii-easyui.widgets.EuiTabs', array(
	'style' => 'height:150px'	
));
?>
	<?php $this->beginWidget('ext.yii-easyui.widgets.EuiTabpanel', array(
		'title' => 'First tab'
	));?>

	<br/><p> Content of first tab </p>
	
	<?php $this->endWidget(); ?>
	
	<?php $this->beginWidget('ext.yii-easyui.widgets.EuiTabpanel', array(
		'title' => 'Second tab', 
		'iconCls' =>'icon-reload'
	));?>

	<br/><p> Content of second tab</p>
	
	<?php $this->endWidget(); ?>
	
	<?php $this->beginWidget('ext.yii-easyui.widgets.EuiTabpanel', array(
		'title' => 'Closable', 
		'closable' => true
	));?>

	<br/><p> Content of closable tab</p>
	
	<?php $this->endWidget(); ?>

<?php $this->endWidget(); ?>
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<?php echo "<?php"?> $this->beginWidget('ext.yii-easyui.widgets.EuiTabs', array(
	'style' => 'height:150px'	
));<?php echo "?>" ?>

	<?php echo "<?php" ?> $this->beginWidget('ext.yii-easyui.widgets.EuiTabpanel', array(
		'title' => 'First tab'
	));<?php echo "?>" ?>


		<br/><p> Content of first tab </p>
	
	<?php echo "<?php" ?> $this->endWidget(); <?php echo "?>" ?>	

	<?php echo "<?php" ?> $this->beginWidget('ext.yii-easyui.widgets.EuiTabpanel', array(
		'title' => 'Second tab', 
		'iconCls' =>'icon-reload'
	));<?php echo "?>" ?>


		<br/><p> Content of second tab</p>
	
	<?php echo "<?php" ?> $this->endWidget(); <?php echo "?>" ?>

	
	<?php echo "<?php" ?> $this->beginWidget('ext.yii-easyui.widgets.EuiTabpanel', array(
		'title' => 'Closable', 
		'closable' => true
	));<?php echo "?>" ?>


		<br/><p> Content of closable tab</p>
	
	<?php echo "<?php" ?> $this->endWidget(); <?php echo "?>" ?>

<?php echo "<?php" ?> $this->endWidget(); <?php echo "?>" ?>
</script>

