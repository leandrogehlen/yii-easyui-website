<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - Combotree';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Combotree',
);
?>
<h1>Combotree</h1>

<p>
Widget representation the Combotree component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/Combotree.php">http://www.jeasyui.com/documentation/Combotree.php</a>
</p>

<h2>Example</h2>

<div class="example">
	<div class="form">
		<div>
		<label>Directory/file</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiCombotree', array(				
			'style' => 'width: 200px',			
			'checkbox' => true,
			'url' => $this->createUrl('comboTree')		
		));?>
		</div>	
	</div>
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php xml; toolbar: false">
<![CDATA[
<div class="example">
	<div class="form">
		<div>
		<label>Directory/file</label>
		<?php echo "<?php "?>$this->widget('ext.yii-easyui.widgets.EuiCombotree', array(				
			'style' => 'width: 200px',						
			'url' => $this->createUrl('comboTree')		
		));
		<?php echo "?>\n" ?>
		</div>				
	</div>
</div>
]]>
</script>

