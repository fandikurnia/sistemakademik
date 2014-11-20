<?php
/* @var $this TblSemesterController */
/* @var $model TblSemester */

$this->breadcrumbs=array(
	'Tbl Semesters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblSemester', 'url'=>array('index')),
	array('label'=>'Create TblSemester', 'url'=>array('create')),
	array('label'=>'View TblSemester', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblSemester', 'url'=>array('admin')),
);
?>

<h1>Update TblSemester <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>