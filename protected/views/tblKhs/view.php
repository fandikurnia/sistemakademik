<?php
/* @var $this TblKhsController */
/* @var $model TblKhs */

$this->breadcrumbs=array(
	'Tbl Khs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblKhs', 'url'=>array('index')),
	array('label'=>'Create TblKhs', 'url'=>array('create')),
	array('label'=>'Update TblKhs', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblKhs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblKhs', 'url'=>array('admin')),
);
?>

<h1>View TblKhs #<?php echo $model->id; ?></h1>

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
