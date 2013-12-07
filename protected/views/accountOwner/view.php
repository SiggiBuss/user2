<?php
/* @var $this AccountOwnerController */
/* @var $model AccountOwner */

$this->breadcrumbs=array(
	'Account Owners'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List AccountOwner', 'url'=>array('index')),
	array('label'=>'Create AccountOwner', 'url'=>array('create')),
	array('label'=>'Update AccountOwner', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AccountOwner', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AccountOwner', 'url'=>array('admin')),
);
?>

<h1>View AccountOwner #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'logo_path',
		'tenant',
		'type',
		'profession',
		'county',
		'currency',
		'street1',
		'street2',
		'city',
		'state',
		'zip',
	),
)); ?>
