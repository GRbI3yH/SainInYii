<?php
/* @var $this TovarController */
/* @var $model Tovar */

$this->breadcrumbs=array(
	'Tovars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tovar', 'url'=>array('index')),
	array('label'=>'Manage Tovar', 'url'=>array('admin')),
);
?>

<h1>Create Tovar</h1>


<?php $this->renderPartial('_form', array('model'=>$model,'properties'=>$properties)); ?>