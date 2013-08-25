<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Pagination';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Pagination',
);
?>
<h1>Pagination</h1>

<p>
Widget representation the Pagination component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/pagination.php">http://www.jeasyui.com/documentation/pagination.php</a>
</p>


<h2>Example</h2>

<div class="example">
<?php
$this->widget('ext.yii-easyui.widgets.EuiPagination', array(
		'total'=> 2000,
		'pageSize'=>10,		
		'style'=>'background:#efefef;border:1px solid #ccc;',
		'buttons'=> array(
			array(
				'text' => 'add',
				'iconCls'=>'icon-add',
			),
			array(
				'text' => 'edit',
				'iconCls'=>'icon-edit',
			)
		)
));
?> 
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
$this->widget('ext.yii-easyui.widgets.EuiPagination', array(
	'total'=> 2000,
	'pageSize'=>10,
	'style'=>'background:#efefef;border:1px solid #ccc;',
	'buttons'=> array(
		array(
			'text' => 'add',
			'iconCls'=>'icon-add',
		),
		array(
			'text' => 'edit',
			'iconCls'=>'icon-edit',
		)
	)
));
]]>
</script>
