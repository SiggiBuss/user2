<?php
/* @var $this CountryCurrencyController */
/* @var $model CountryCurrency */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'country-currency-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'currency_code'); ?>
		<?php echo $form->textField($model,'currency_code',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'currency_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currency_format'); ?>
		<?php echo $form->textField($model,'currency_format',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'currency_format'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country_en'); ?>
		<?php echo $form->textField($model,'country_en',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'country_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country_de'); ?>
		<?php echo $form->textField($model,'country_de',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'country_de'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->