<?php
/* @var $this TovarController */
/* @var $model Tovar */

$this->breadcrumbs=array(
	'Tovars'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tovar', 'url'=>array('index')),
	array('label'=>'Create Tovar', 'url'=>array('create')),
	array('label'=>'View Tovar', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tovar', 'url'=>array('admin')),
);
?>

<h1>Update Tovar <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>