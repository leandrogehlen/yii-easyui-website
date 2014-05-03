<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - Combotree';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'ComboTree',
);
?>
<h1>Combotree</h1>

<p>
Widget representation the Combotree component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/combotree.php">http://www.jeasyui.com/documentation/Combotree.php</a>
</p>

<h2>Example</h2>

<div class="example">
	<div class="form">
		<div>	
		<label>Directory/file</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiComboTree', array(				
			'style' => 'width: 200px',			
			'url' => $this->createUrl('tree')		
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
		<label>Directory/file</label>
		<?php echo "<?php "?>$this->widget('ext.yii-easyui.widgets.EuiComboTree', array(				
			'style' => 'width: 200px',				
			'url' => $this->createUrl('tree')		
		));
		<?php echo "?>\n" ?>
		</div>				
	</div>
</div>
]]>
</script>

<h2>Controller</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
public function actionComboTree()
{
	$tree = array(
		array('id' => 1, 'text'=> 'Folder 1', 'children' => array(
			array('id' => 2, 'text'=> 'file 1'),
			array('id' => 3, 'text'=> 'file 2'),
			array('id' => 4, 'text'=> 'Folder 2', 'children' => array(
				array('id' => 7, 'text'=> 'File 3', 'iconCls' => 'icon-reload'),
				array('id' => 8, 'text'=> 'File 4')
			))
		)),
		array('id' => 4, 'text'=> 'Languages', 'children' => array(
			array('id' => 5, 'text'=> 'Java'),
			array('id' => 6, 'text'=> 'PHP')
		))
	);
	echo CJSON::encode( $tree );
}
]]>
</script>
