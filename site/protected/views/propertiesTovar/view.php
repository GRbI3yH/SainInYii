<?php
/* @var $this PropertiesTovarController */
/* @var $model PropertiesTovar */

$this->breadcrumbs=array(
	'Properties Tovars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PropertiesTovar', 'url'=>array('index')),
	array('label'=>'Create PropertiesTovar', 'url'=>array('create')),
	array('label'=>'Update PropertiesTovar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PropertiesTovar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PropertiesTovar', 'url'=>array('admin')),
);
?>

<h1>View PropertiesTovar #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_properties',
		'id_tovar',
		'value',
	),
)); ?>
