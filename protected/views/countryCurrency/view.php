<?php
/* @var $this CountryCurrencyController */
/* @var $model CountryCurrency */

$this->breadcrumbs=array(
	'Country Currencies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CountryCurrency', 'url'=>array('index')),
	array('label'=>'Create CountryCurrency', 'url'=>array('create')),
	array('label'=>'Update CountryCurrency', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CountryCurrency', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CountryCurrency', 'url'=>array('admin')),
);
?>

<h1>View CountryCurrency #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'currency_code',
		'currency_format',
		'country_en',
		'country_de',
	),
)); ?>
