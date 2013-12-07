<?php
/* @var $this AccountOwnerController */
/* @var $model AccountOwner */

$this->breadcrumbs=array(
	'Account Owners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AccountOwner', 'url'=>array('index')),
	array('label'=>'Manage AccountOwner', 'url'=>array('admin')),
);
?>

<h1>Create AccountOwner</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>