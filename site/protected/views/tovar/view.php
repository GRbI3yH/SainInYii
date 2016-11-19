<?php
/* @var $this TovarController */
/* @var $model Tovar */

$this->breadcrumbs=array(
	'Tovars'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Tovar', 'url'=>array('index')),
	array('label'=>'Create Tovar', 'url'=>array('create')),
	array('label'=>'Update Tovar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tovar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tovar', 'url'=>array('admin')),
);
?>

<h1>View Tovar #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'price',
		'nomer',
	),
));


?>


