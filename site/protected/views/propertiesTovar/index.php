<?php
/* @var $this PropertiesTovarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Properties Tovars',
);

$this->menu=array(
	array('label'=>'Create PropertiesTovar', 'url'=>array('create')),
	array('label'=>'Manage PropertiesTovar', 'url'=>array('admin')),
);
?>

<h1>Properties Tovars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
