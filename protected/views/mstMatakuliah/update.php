<?php
/* @var $this MstMatakuliahController */
/* @var $model MstMatakuliah */

$this->breadcrumbs=array(
	'Mst Matakuliahs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Daftar Matakuliah', 'url'=>array('index')),
	array('label'=>'Tambah Matakuliah', 'url'=>array('create')),
	array('label'=>'Tampilkan Matakuliah', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Pemeliharaan Tabel Matakuliah', 'url'=>array('admin')),
);
?>

<h1>Ubah Matakuliah <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>