<?php
/* @var $this CountryCurrencyController */
/* @var $model CountryCurrency */

$this->breadcrumbs=array(
	'Country Currencies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CountryCurrency', 'url'=>array('index')),
	array('label'=>'Manage CountryCurrency', 'url'=>array('admin')),
);
?>

<h1>Create CountryCurrency</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>