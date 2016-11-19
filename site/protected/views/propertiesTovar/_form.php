<?php
/* @var $this PropertiesTovarController */
/* @var $model PropertiesTovar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'properties-tovar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_properties'); ?>
		<?php echo $form->textField($model,'id_properties'); ?>
		<?php echo $form->error($model,'id_properties'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tovar'); ?>
		<?php echo $form->textField($model,'id_tovar'); ?>
		<?php echo $form->error($model,'id_tovar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value'); ?>
		<?php echo $form->textField($model,'value',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'value'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->