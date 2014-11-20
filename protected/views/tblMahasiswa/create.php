<?php
/* @var $this TblMahasiswaController */
/* @var $model TblMahasiswa */

$this->breadcrumbs=array(
	'Tbl Mahasiswas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblMahasiswa', 'url'=>array('index')),
	array('label'=>'Manage TblMahasiswa', 'url'=>array('admin')),
);
?>

<h1>Create TblMahasiswa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>