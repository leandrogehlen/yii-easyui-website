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

$this->widget('ext.yii-easyui.widgets.EuiLayout', array(
	'style' => 'width:auto;height:300px',	
	'regions' =>array(
		array('region'=> EuiRegion::NORTH, 'title'=>'North', 'style'=>'height:100px'),
		array('region'=> EuiRegion::EAST, 'title'=>'East','style'=>'width:100px;'),
		array('region'=> EuiRegion::CENTER, 'title'=>'Center'),
		array('region'=> EuiRegion::SOUTH, 'title'=>'South', 'style'=>'height:100px'),
		array('region'=> EuiRegion::WEST, 'title'=>'West', 'style'=>'width:100px;'),
	)		
));
?> 
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
Yii::import('ext.yii-easyui.widgets.EuiRegion');

$this->widget('ext.yii-easyui.widgets.EuiLayout', array(
	'style' => 'width:600px;height:400px',	
	'regions' =>array(
		array('region'=> EuiRegion::NORTH, 'title'=>'North', 'style'=>'height:100px'),
		array('region'=> EuiRegion::EAST, 'title'=>'East','style'=>'width:100px;'),
		array('region'=> EuiRegion::CENTER, 'title'=>'Center'),
		array('region'=> EuiRegion::SOUTH, 'title'=>'South', 'style'=>'height:100px'),
		array('region'=> EuiRegion::WEST, 'title'=>'West', 'style'=>'width:100px;'),
	)		
));
]]>
</script>

