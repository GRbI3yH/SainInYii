<?php
/* @var $this PropertiesTovarController */
/* @var $model PropertiesTovar */

$this->breadcrumbs=array(
	'Properties Tovars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PropertiesTovar', 'url'=>array('index')),
	array('label'=>'Manage PropertiesTovar', 'url'=>array('admin')),
);
?>

<h1>Create PropertiesTovar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>