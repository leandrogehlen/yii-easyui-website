<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - Menu';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'Menu',
);
?>
<h1>Menu</h1>

<p>
Widget representation the Menu component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/menu.php">http://www.jeasyui.com/documentation/menu.php</a>
</p>


<h2>Example</h2>

<div class="example">
<?php
$this->widget('ext.yii-easyui.widgets.EuiMenu', array(
	'id' => 'mm',	
	'items' =>array(
		array('text'=>'New'),
		array('text'=>'Open', 'items' => array(
			array('text' => 'Word'),
			array('text' => 'Excel'),
		)),
		array('text'=>'Save', 'iconCls' => 'icon-save'),
		array('separator'=>true),
		array('text'=>'Exit'),										
	)		
));
?> 

<div class="demo-info">           
	<div>Right click on page to display menu.</div>  
</div>
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
$this->widget('ext.yii-easyui.widgets.EuiMenu', array(
	'id' => 'mm',	
	'items' =>array(
		array('text'=>'New'),
		array('text'=>'Open', 'items' => array(
			array('text' => 'Word'),
			array('text' => 'Excel'),
		)),
		array('text'=>'Save', 'iconCls' => 'icon-save'),
		array('separator'=>true),
		array('text'=>'Exit'),										
	)		
));
]]>
</script>
  
 <script>  
 $(function(){  
 	$(document).bind('contextmenu',function(e){  
    	e.preventDefault();  
    	$('#mm').menu('show', {  
    		left: e.pageX,  
        	top: e.pageY  
    	});  
    });  
});  
</script> 


