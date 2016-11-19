<?php
/* @var $this TovarController */
/* @var $model Tovar */

$this->breadcrumbs=array(
	'Tovars'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Tovar', 'url'=>array('index')),
	array('label'=>'Create Tovar', 'url'=>array('create')),
);


?>

<h1>Manage Tovars</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>


<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tovar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>null,
	'columns'=>array(
		'id',
		'name',
		'price',
		'nomer',
		array( 'name'=>'properties_search', 'value'=>'$data->propertiesTovars->id' ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
