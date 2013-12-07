<?php
/* @var $this CountryCurrencyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Country Currencies',
);

$this->menu=array(
	array('label'=>'Create CountryCurrency', 'url'=>array('create')),
	array('label'=>'Manage CountryCurrency', 'url'=>array('admin')),
);
?>

<h1>Country Currencies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
