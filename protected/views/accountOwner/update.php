<?php
/* @var $this AccountOwnerController */
/* @var $model AccountOwner */

$this->breadcrumbs=array(
	'Account Owners'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AccountOwner', 'url'=>array('index')),
	array('label'=>'Create AccountOwner', 'url'=>array('create')),
	array('label'=>'View AccountOwner', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AccountOwner', 'url'=>array('admin')),
);
?>

<h1>Update AccountOwner <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>