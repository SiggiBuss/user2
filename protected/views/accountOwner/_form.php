<?php
/* @var $this AccountOwnerController */
/* @var $model AccountOwner */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'account-owner-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logo_path'); ?>
		<?php echo $form->textField($model,'logo_path',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'logo_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tenant'); ?>
		<?php echo $form->textField($model,'tenant',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'tenant'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profession'); ?>
		<?php echo $form->textField($model,'profession',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'profession'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'county'); ?>
		<?php //echo $form->textField($model,'county'); ?>
                <?php //echo $form->dropDownList($model, 'currency', CHtml::listData(CountryCurrency::model()->findAll(), 'id',function($model){ return $model->currency_code->currency_format.' '.$model->currency_code->country_dei; }),
                      echo $form->dropDownList($model, 'county', CHtml::listData(CountryCurrency::model()->findAll(), 'id', 'country_de'),
                array(
                        'prompt'=>'sprache auswählen',
                       
                        )); ?>
		<?php echo $form->error($model,'county'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currency'); ?>
		<?php //echo $form->textField($model,'currency'); ?>
                <?php //echo $form->dropDownList($model, 'currency', CHtml::listData(CountryCurrency::model()->findAll(), 'id',function($model){ return $model->currency_code->currency_format.' '.$model->currency_code->country_dei; }),
                      echo $form->dropDownList($model, 'currency', CHtml::listData(CountryCurrency::model()->findAll(), 'id', 'currencyName'),
                array(
                        'prompt'=>'Währung auswählen',
                       
                        )); ?>
                
		<?php echo $form->error($model,'currency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'street1'); ?>
		<?php echo $form->textField($model,'street1',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'street1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'street2'); ?>
		<?php echo $form->textField($model,'street2',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'street2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zip'); ?>
		<?php echo $form->textField($model,'zip',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'zip'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->