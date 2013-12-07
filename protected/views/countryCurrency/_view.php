<?php
/* @var $this CountryCurrencyController */
/* @var $data CountryCurrency */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currency_code')); ?>:</b>
	<?php echo CHtml::encode($data->currency_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currency_format')); ?>:</b>
	<?php echo CHtml::encode($data->currency_format); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_en')); ?>:</b>
	<?php echo CHtml::encode($data->country_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_de')); ?>:</b>
	<?php echo CHtml::encode($data->country_de); ?>
	<br />


</div>