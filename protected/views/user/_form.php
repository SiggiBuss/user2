<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activation_key'); ?>
		<?php echo $form->textField($model,'activation_key',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'activation_key'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_on'); ?>
		<?php echo $form->textField($model,'created_on'); ?>
		<?php echo $form->error($model,'created_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_on'); ?>
		<?php echo $form->textField($model,'updated_on'); ?>
		<?php echo $form->error($model,'updated_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_visit_on'); ?>
		<?php echo $form->textField($model,'last_visit_on'); ?>
		<?php echo $form->error($model,'last_visit_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password_set_on'); ?>
		<?php echo $form->textField($model,'password_set_on'); ?>
		<?php echo $form->error($model,'password_set_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_verified'); ?>
		<?php echo $form->textField($model,'email_verified'); ?>
		<?php echo $form->error($model,'email_verified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active'); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_disabled'); ?>
		<?php echo $form->textField($model,'is_disabled'); ?>
		<?php echo $form->error($model,'is_disabled'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'one_time_password_secret'); ?>
		<?php echo $form->textField($model,'one_time_password_secret',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'one_time_password_secret'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'one_time_password_code'); ?>
		<?php echo $form->textField($model,'one_time_password_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'one_time_password_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'one_time_password_counter'); ?>
		<?php echo $form->textField($model,'one_time_password_counter'); ?>
		<?php echo $form->error($model,'one_time_password_counter'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->