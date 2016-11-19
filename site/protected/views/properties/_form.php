<?php
/* @var $this PropertiesController */
/* @var $model Properties */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'properties-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="divrow">
			<?php echo $form->labelEx($model,'name'); ?>
			<?php echo $form->textField($model,'name',array('size'=>25,'maxlength'=>25)); ?>
			<?php echo $form->error($model,'name'); ?>
		</div>
		<div class="divrow">
			<?php echo $form->labelEx($model,'type'); ?>
			<?php echo $form->dropDownList($model,'type',[0=>'Integer',1=>'String',2=>'Checkbox']); ?>
			<?php echo $form->error($model,'type'); ?>
		</div >
		<div class="divrow">
			<?php echo $form->labelEx($model,'search'); ?>
			<?php echo $form->checkBox($model,'search'); ?>
			<?php echo $form->error($model,'search'); ?>
		</div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->