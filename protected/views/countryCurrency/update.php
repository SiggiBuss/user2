<?php
/* @var $this CountryCurrencyController */
/* @var $model CountryCurrency */

$this->breadcrumbs=array(
	'Country Currencies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CountryCurrency', 'url'=>array('index')),
	array('label'=>'Create CountryCurrency', 'url'=>array('create')),
	array('label'=>'View CountryCurrency', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CountryCurrency', 'url'=>array('admin')),
);
?>

<h1>Update CountryCurrency <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>