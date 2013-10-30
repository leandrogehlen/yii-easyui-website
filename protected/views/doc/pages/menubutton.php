<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Menubutton';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Menubuttonbutton',
);
?>
<h1>Menubutton</h1>

<p>
Widget representation the Menubutton component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/menubutton.php">http://www.jeasyui.com/documentation/menubutton.php</a>
</p>

<h2>Example</h2>

<div class="example">
	<div style="padding:5px;border:1px solid #ddd;">   
	<?php
	$this->widget('ext.yii-easyui.widgets.EuiMenu', array(
		'id' => 'menu_file',
		'items' =>array(
			array('text'=>'New'),
			array('text'=>'Open', 'items' => array(
				array('text' => 'Word'),
				array('text' => 'Excel'),
			)),
			array('text'=>'Save', 'iconCls' => 'icon-save'),
			array('separator'=>true),
			array('text'=>'Exit')
		)
	));
	
	$this->widget('ext.yii-easyui.widgets.EuiMenu', array(
		'id' => 'menu_edit',
		'items' =>array(
			array('text'=>'Copy'),
			array('text'=>'Paste')
		)
	));
	
	$this->widget('ext.yii-easyui.widgets.EuiMenubutton', array(
		'id' => 'btn_file',
		'text'=> 'File',
		'menu' => '#menu_file'				
	));
	
	$this->widget('ext.yii-easyui.widgets.EuiMenubutton', array(
		'id' => 'btn_edit',
		'text'=> 'Edit',
		'menu' => '#menu_edit'
	));
	?>
	</div>
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
$this->widget('ext.yii-easyui.widgets.EuiMenu', array(
	'id' => 'menu_file',
	'items' =>array(
		array('text'=>'New'),
		array('text'=>'Open', 'items' => array(
			array('text' => 'Word'),
			array('text' => 'Excel'),
		)),
		array('text'=>'Save', 'iconCls' => 'icon-save'),
		array('separator'=>true),
		array('text'=>'Exit')
	)
));
	
$this->widget('ext.yii-easyui.widgets.EuiMenu', array(
	'id' => 'menu_edit',
	'items' =>array(
		array('text'=>'Copy'),
		array('text'=>'Paste')
	)
));
	
$this->widget('ext.yii-easyui.widgets.EuiMenubutton', array(
	'id' => 'btn_file',
	'text'=> 'File',
	'menu' => '#menu_file'				
));
	
$this->widget('ext.yii-easyui.widgets.EuiMenubutton', array(
	'id' => 'btn_edit',
	'text'=> 'Edit',
	'menu' => '#menu_edit'
));
]]>
</script>