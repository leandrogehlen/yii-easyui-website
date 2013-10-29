<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - Layout';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Layout',
);
?>
<h1>Layout</h1>

<p>
Widget representation the Layout component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/layout.php">http://www.jeasyui.com/documentation/layout.php</a>
</p>

<h2>Example</h2>

<div class="example">
<?php
Yii::import('ext.yii-easyui.widgets.EuiRegion');

$this->beginWidget('ext.yii-easyui.widgets.EuiLayout', array(
	'style' => 'width:auto;height:300px'		
));
?>

<?php
	$this->widget('ext.yii-easyui.widgets.EuiRegion', array(		
		'region'=> EuiRegion::NORTH, 
		'title'=>'North', 
		'style'=>'height:100px'
	));
	
	$this->widget('ext.yii-easyui.widgets.EuiRegion', array(
		'region'=> EuiRegion::CENTER,
		'title'=>'Center',
	));
	
	$this->widget('ext.yii-easyui.widgets.EuiRegion', array(
		'region'=> EuiRegion::SOUTH,
		'title'=>'South',
		'style'=>'height:100px'
	));
	
	$this->widget('ext.yii-easyui.widgets.EuiRegion', array(
		'region'=> EuiRegion::WEST,
		'title'=>'West',
		'style'=>'width:100px'
	));

	$this->widget('ext.yii-easyui.widgets.EuiRegion', array(
		'region'=> EuiRegion::EAST,
		'title'=>'East',
		'style'=>'width:100px'
	));
?> 	

<?php $this->endWidget(); ?>
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
<?php echo "<?php"; ?>
Yii::import('ext.yii-easyui.widgets.EuiRegion');

$this->beginWidget('ext.yii-easyui.widgets.EuiLayout', array(
	'style' => 'width:auto;height:300px'		
));<?php echo "?>"; ?>

<?php echo "<?php"; ?>
	$this->widget('ext.yii-easyui.widgets.EuiRegion', array(		
		'region'=> EuiRegion::NORTH, 
		'title'=>'North', 
		'style'=>'height:100px'
	));
	
	$this->widget('ext.yii-easyui.widgets.EuiRegion', array(
		'region'=> EuiRegion::CENTER,
		'title'=>'Center',
	));
	
	$this->widget('ext.yii-easyui.widgets.EuiRegion', array(
		'region'=> EuiRegion::SOUTH,
		'title'=>'South',
		'style'=>'height:100px'
	));
	
	$this->widget('ext.yii-easyui.widgets.EuiRegion', array(
		'region'=> EuiRegion::WEST,
		'title'=>'West',
		'style'=>'width:100px'
	));

	$this->widget('ext.yii-easyui.widgets.EuiRegion', array(
		'region'=> EuiRegion::EAST,
		'title'=>'East',
		'style'=>'width:100px'
	));
<?php echo "?>"; ?>

<?php echo "<?php"; ?> $this->endWidget(); <?php echo "?>"; ?>
]]>
</script>

