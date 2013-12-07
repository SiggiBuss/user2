<?php
/* @var $this AccountOwnerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Account Owners',
);

$this->menu=array(
	array('label'=>'Create AccountOwner', 'url'=>array('create')),
	array('label'=>'Manage AccountOwner', 'url'=>array('admin')),
);
?>

<h1>Account Owners</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
