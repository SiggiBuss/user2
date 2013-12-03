<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activation_key')); ?>:</b>
	<?php echo CHtml::encode($data->activation_key); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
	<?php echo CHtml::encode($data->created_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_on')); ?>:</b>
	<?php echo CHtml::encode($data->updated_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_visit_on')); ?>:</b>
	<?php echo CHtml::encode($data->last_visit_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password_set_on')); ?>:</b>
	<?php echo CHtml::encode($data->password_set_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_verified')); ?>:</b>
	<?php echo CHtml::encode($data->email_verified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_disabled')); ?>:</b>
	<?php echo CHtml::encode($data->is_disabled); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('one_time_password_secret')); ?>:</b>
	<?php echo CHtml::encode($data->one_time_password_secret); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('one_time_password_code')); ?>:</b>
	<?php echo CHtml::encode($data->one_time_password_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('one_time_password_counter')); ?>:</b>
	<?php echo CHtml::encode($data->one_time_password_counter); ?>
	<br />

	*/ ?>

</div>