<?php
/* @var $this TblSemesterController */
/* @var $model TblSemester */

$this->breadcrumbs=array(
	'Tbl Semesters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblSemester', 'url'=>array('index')),
	array('label'=>'Create TblSemester', 'url'=>array('create')),
	array('label'=>'Update TblSemester', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblSemester', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblSemester', 'url'=>array('admin')),
);
?>

<h1>View TblSemester #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ta_semester',
		'tgl_mulai',
		'tgl_akhir',
	),
)); ?>
