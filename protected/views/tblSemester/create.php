<?php
/* @var $this TblSemesterController */
/* @var $model TblSemester */

$this->breadcrumbs=array(
	'Tbl Semesters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblSemester', 'url'=>array('index')),
	array('label'=>'Manage TblSemester', 'url'=>array('admin')),
);
?>

<h1>Buat Data Semester</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>