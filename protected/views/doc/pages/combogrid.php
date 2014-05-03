<?php
/* @var $this DocController */

$this->pageTitle=Yii::app()->name . ' - Combogrid';
$this->breadcrumbs=array(
	Yii::t('site', 'Documentation')=> array('index'),		
	'ComboGrid',
);
?>
<h1>Combogrid</h1>

<p>
Widget representation the Combogrid component.<br/>
See more details <a href="http://www.jeasyui.com/documentation/combogrid.php">http://www.jeasyui.com/documentation/combogrid.php</a>
</p>

<h2>Example</h2>

<div class="example">
	<div class="form">
		<div>	
		<label>Products</label>
		<?php $this->widget('ext.yii-easyui.widgets.EuiComboGrid', array(				
			'style' => 'width: 200px',
			'panelWidth' => 520,
			'pagination' => true,
			'url' => $this->createUrl('products'),
			'idField' => 'product_id',
			'textField' => 'name',
			'columns' => array(
				array('title' => Product::model()->getAttributeLabel('id'), 'field'=>'id', 'width'=> 10, 'sortable'=>true),
				array('title' => Product::model()->getAttributeLabel('name'), 'field'=>'name', 'width'=> 30, 'sortable'=>true),
				array('title' => Product::model()->getAttributeLabel('price'), 'field'=>'price', 'width'=> 20, 'sortable'=>true),
				array('title' => Product::model()->getAttributeLabel('status'), 'field'=>'status', 'width'=> 10),
				array('title' => Product::model()->getAttributeLabel('description'), 'field'=>'description', 'width'=> 30)
			)	
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
		<label>Products</label>
		<?php echo "<?php "?>$this->widget('ext.yii-easyui.widgets.EuiComboGrid', array(				
			'style' => 'width: 200px',
			'panelWidth' => 520,
			'pagination' => true,
			'url' => $this->createUrl('products'),
			'idField' => 'product_id',
			'textField' => 'name',
			'columns' => array(
				array('title' => Product::model()->getAttributeLabel('id'), 'field'=>'id', 'width'=> 10, 'sortable'=>true),
				array('title' => Product::model()->getAttributeLabel('name'), 'field'=>'name', 'width'=> 30, 'sortable'=>true),
				array('title' => Product::model()->getAttributeLabel('price'), 'field'=>'price', 'width'=> 20, 'sortable'=>true),
				array('title' => Product::model()->getAttributeLabel('status'), 'field'=>'status', 'width'=> 10),
				array('title' => Product::model()->getAttributeLabel('description'), 'field'=>'description', 'width'=> 30)
			)	
		));<?php echo "?>\n" ?>
		</div>				
	</div>
</div>
]]>
</script>

<h2>Controller</h2>

<script type="syntaxhighlighter" class="brush: php; toolbar: false">
<![CDATA[
public function actionProducts() 
{
	$params = array();		

	if(isset($_REQUEST['rows']) && isset($_REQUEST['page'])) 
	{
		$limit = $_REQUEST['rows'];
		$params = array('limit'=>$limit, 'offset'=>($_REQUEST['page']-1) * $limit);			
	}		

	if (isset($_REQUEST['sort'])) 
	{
		$sort = $_REQUEST['sort'];
		$direction = (isset($_REQUEST['order'])) ? $_REQUEST['order'] : "";
		$params['order'] = Product::model()->getTableAlias(true).".". $sort." ".$direction;	
	}
						
	echo CJSON::encode( array ('total' => Product::model()->count(), 'rows' => Product::model()->findAll($params)) );
}
]]>
</script>
