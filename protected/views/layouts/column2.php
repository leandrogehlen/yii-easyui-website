<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="span-5 last">
	<div id="sidebar">
	<?php
		foreach ($this->menu as $item) 
		{
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>Yii::t('site', $item['label']),
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$item['items'],
				'htmlOptions'=>array('class'=>'operations'),
			));				
			$this->endWidget();		
		}
	?>
	</div><!-- sidebar -->
</div>

<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>