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
$this->beginWidget('ext.yii-easyui.widgets.EuiAccordion', array(
	'style' => 'width:300px;height:200px;'		
));
?> 
	<?php $this->beginWidget('ext.yii-easyui.widgets.EuiPanel', array(
		'title' => 'Panel 1',
	    'internal' => true
	));?>

	<br/><p> Content of panel 1 </p>
	
	<?php $this->endWidget(); ?>
	
	<?php $this->beginWidget('ext.yii-easyui.widgets.EuiPanel', array(
		'title' => 'Panel 2', 
	    'internal'  => true,
		'selected' => true		
	));?>

	<br/><p> Content of panel 2</p>		
	
	<?php $this->endWidget(); ?>

<?php $this->endWidget(); ?>
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
<?php echo "<?php"; ?>
$this->beginWidget('ext.yii-easyui.widgets.EuiAccordion', array(
	'style' => 'width:300px;height:200px;'		
));<?php echo "?>"; ?>


	<?php echo "<?php"; ?> $this->beginWidget('ext.yii-easyui.widgets.EuiAccordionpanel', array(
		'title' => 'Panel 1',
        'internal'  => true,
	));<?php echo "?>"; ?>


	<br/><p> Content of panel 1 </p>
	
	<?php echo "<?php"; ?> $this->endWidget(); <?php echo "?>"; ?>

	
	<?php echo "<?php"; ?> $this->beginWidget('ext.yii-easyui.widgets.EuiAccordionpanel', array(
		'title' => 'Panel 2', 
        'internal'  => true,    
		'selected' => true		
	));<?php echo "?>"; ?>


	<br/><p> Content of panel 2</p>		
	
	<?php echo "<?php"; ?> $this->endWidget(); <?php echo "?>"; ?>


<?php echo "<?php"; ?> $this->endWidget(); <?php echo "?>"; ?>
]]>
</script>

