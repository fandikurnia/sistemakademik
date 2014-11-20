<?php
/* @var $this TblKrsController */
/* @var $model TblKrs */

$this->breadcrumbs=array(
	'Tbl Krs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblKrs', 'url'=>array('index')),
	array('label'=>'Create TblKrs', 'url'=>array('create')),
	array('label'=>'Update TblKrs', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblKrs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblKrs', 'url'=>array('admin')),
);
?>

<h1>View TblKrs #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'semester_id',
		'mahasiswa_id',
		'mkuliah_id',
		'nilai',
	),
)); ?>
