<?php
/* @var $this AccountOwnerController */
/* @var $model AccountOwner */

$this->breadcrumbs=array(
	'Account Owners'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AccountOwner', 'url'=>array('index')),
	array('label'=>'Create AccountOwner', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#account-owner-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Account Owners</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'account-owner-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'logo_path',
		'tenant',
		'type',
		'profession',
		/*
		'county',
		'currency',
		'street1',
		'street2',
		'city',
		'state',
		'zip',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
