<?php
/* @var $this TovarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tovars',
);

$this->menu=array(
	array('label'=>'Create Tovar', 'url'=>array('create')),
	array('label'=>'Manage Tovar', 'url'=>array('admin')),
);
?>

<h1>Tovars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
