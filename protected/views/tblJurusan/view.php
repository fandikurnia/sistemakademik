<?php
/* @var $this TblJurusanController */
/* @var $model TblJurusan */

$this->breadcrumbs=array(
	'Tbl Jurusans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblJurusan', 'url'=>array('index')),
	array('label'=>'Create TblJurusan', 'url'=>array('create')),
	array('label'=>'Update TblJurusan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblJurusan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblJurusan', 'url'=>array('admin')),
);
?>

<h1>View TblJurusan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'jenjang',
		'jurusan',
		'singkat',
	),
)); ?>
