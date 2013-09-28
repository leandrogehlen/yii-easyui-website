<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - Propertygrid';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Propertygrid',
);
?>
<h1>Propertygrid</h1>

<p>
Widget representation the Propertygrid component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/propertygrid.php">http://www.jeasyui.com/documentation/propertygrid.php</a>
</p>

<h2>Example</h2>

<div class="example">
<?php
$this->widget('ext.yii-easyui.widgets.EuiPropertygrid', array(	
	'url' => $this->createUrl('properties'),
	'style' => 'width:300px',
	'showGroup' => true    
));
?>
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
$this->widget('ext.yii-easyui.widgets.EuiPropertygrid', array(	
	'url' => $this->createUrl('properties'),
	'style' => 'width:300px',
	'showGroup' => true    
));
]]>
</script>

<h3> Controller </h3>
<script type="syntaxhighlighter" class="brush: php; toolbar: false">
public function actionProperties()
{
	$data = array(
		array("name"=>"Name","value"=>"Bill Smith","group"=>"ID Settings","editor"=>"text"),
		array("name"=>"Address","value"=>"","group"=>"ID Settings","editor"=>"text"),
		array("name"=>"SSN","value"=>"123-456-7890","group"=>"ID Settings","editor"=>"text"),
		array("name"=>"Email","value"=>"bill@gmail.com","group"=>"Marketing Settings","editor"=>array(
			"type"=>"validatebox",
			"options"=>array("validType"=>"email")					
		))
	);
	echo  $this->exportData($data);
}
</script>

