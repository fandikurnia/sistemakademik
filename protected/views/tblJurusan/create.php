<?php
/* @var $this TblJurusanController */
/* @var $model TblJurusan */

$this->breadcrumbs=array(
	'Tbl Jurusans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblJurusan', 'url'=>array('index')),
	array('label'=>'Manage TblJurusan', 'url'=>array('admin')),
);
?>

<h1>Create TblJurusan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>