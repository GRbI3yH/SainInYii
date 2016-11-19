<?php
/* @var $this PropertiesTovarController */
/* @var $model PropertiesTovar */

$this->breadcrumbs=array(
	'Properties Tovars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PropertiesTovar', 'url'=>array('index')),
	array('label'=>'Create PropertiesTovar', 'url'=>array('create')),
	array('label'=>'View PropertiesTovar', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PropertiesTovar', 'url'=>array('admin')),
);
?>

<h1>Update PropertiesTovar <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>