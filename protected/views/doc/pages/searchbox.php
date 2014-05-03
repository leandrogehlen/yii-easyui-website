<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - SearchBox';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'SearchBox',
);
?>
<h1>Searchbox</h1>

<p>
Widget representation the Searchbox component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/searchbox.php">http://www.jeasyui.com/documentation/searchbox.php</a>
</p>

<h2>Example</h2>

<div class="example">
<?php
$this->widget('ext.yii-easyui.widgets.EuiSearchBox', array(
	'id'=>'sb',
	'prompt'=> 'Please Input Value',
	'menu'=>array(
		array('name'=>'all', 'text'=>'All', 'iconCls'=>'icon-ok'),
		array('name'=>'sports', 'text'=>'Sports')	
	)		
));
?>
</div>

<h2>Widget</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
$this->widget('ext.yii-easyui.widgets.EuiSearchBox', array(
    'id'=>'sb',
	'prompt'=> 'Please Input Value',
	'menu'=>array(
		array('name'=>'all', 'text'=>'All', 'iconCls'=>'icon-ok'),
		array('name'=>'sports', 'text'=>'Sports')	
	)		
));
]]>
</script>

<pre class="brush: js; toolbar: false">
<script type="text/javascript">   
$('#sb').searchbox({  
	searcher:function(value,name){  
		alert(value + "," + name);  
	}
});  
</script>
</pre>
 
<script type="text/javascript">
/*<![CDATA[*/
jQuery(function($) {
	$('#sb').searchbox({  
	    searcher:function(value,name){  
	        alert(name+ ":" + value);  
	    }
	});  
});
/*]]>*/
</script>

