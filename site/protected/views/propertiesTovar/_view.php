<?php
/* @var $this PropertiesTovarController */
/* @var $data PropertiesTovar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_properties')); ?>:</b>
	<?php echo CHtml::encode($data->id_properties); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tovar')); ?>:</b>
	<?php echo CHtml::encode($data->id_tovar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />


</div>