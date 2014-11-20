<?php
/* @var $this MstMatakuliahController */
/* @var $model MstMatakuliah */
/*
$this->breadcrumbs=array(
	'Mst Matakuliahs'=>array('index'),
	'Create',
);
*/
$this->breadcrumbs=array(
	'Tabel Matakuliahs'=>array('index'),
	'Tambah Data',
);

$this->menu=array(
	array('label'=>'Menampilkan Mata Kuliah', 'url'=>array('index')),
	array('label'=>'Pemeliharaan Mata Kuliah', 'url'=>array('admin')),
);
?>

<h1>Tambah Data Tabel Mata Kuliah</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>