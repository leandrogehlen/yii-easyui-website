<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - Treegrid';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Treegrid',
);
?>
<h1>Treegrid</h1>

<p>
Widget representation the Treegrid component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/treegrid.php">http://www.jeasyui.com/documentation/treegrid.php</a>
</p>

<h2>Example</h2>

<div class="example">
<?php
$this->widget('ext.yii-easyui.widgets.EuiTreegrid', array(
	'style' => 'width:auto; height: 200px',
	'url' => $this->createUrl('tree'),
	'idField' => 'id',
	'treeField' => 'text',
	'animate' => true,
	'columns' => array(		
		array('title' => 'Name', 'field'=>'text', 'width'=> 60),
		array('title' => 'Attrs', 'field'=>'attrs', 'width'=> 40)		
	)		
));
?>
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
$this->widget('ext.yii-easyui.widgets.EuiTreegrid', array(
	'style' => 'width:auto; height: 200px',
	'url' => $this->createUrl('tree'),
	'idField' => 'id',
	'treeField' => 'text',
	'animate' => true,
	'columns' => array(		
		array('title' => 'Name', 'field'=>'text', 'width'=> 60),
		array('title' => 'Attrs', 'field'=>'attrs', 'width'=> 40)		
	)		
));
]]>
</script>

<h3> Controller </h3>
<script type="syntaxhighlighter" class="brush: php; toolbar: false">
public function actionTree()
{
	$tree = array(
		array('id' => 1, 'text'=> 'Folder 1', 'attrs' => 'rxw', 'children' => array(
			array('id' => 2, 'text'=> 'file 1', 'attrs' => 'r-w'),
			array('id' => 3, 'text'=> 'file 2', 'attrs' => 'r--'),
			array('id' => 4, 'text'=> 'Folder 2', 'attrs' => '-xw', 'children' => array(
				array('id' => 7, 'text'=> 'File 3', 'attrs' => '--w', 'iconCls' => 'icon-reload'),
				array('id' => 8, 'text'=> 'File 4', 'attrs' => '-x-',)
			))
		)),
		array('id' => 4, 'text'=> 'Languages', 'attrs' => 'rw-', 'children' => array(
			array('id' => 5, 'text'=> 'Java', 'attrs' => 'rwx'),
			array('id' => 6, 'text'=> 'PHP', 'attrs' => 'r--')
		))
	);
	echo CJSON::encode( $tree );
}
</script>

