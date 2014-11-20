<?php
/* @var $this MstMatakuliahController */
/* @var $model MstMatakuliah */

$this->breadcrumbs=array(
	'Tabel Matakuliah'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Tabel Matakuliah', 'url'=>array('index')),
	array('label'=>'Tambah Matakuliah', 'url'=>array('create')),
	array('label'=>'Ubah Matakuliah', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Hapus Matakuliah', 
            'url'=>'#', 'linkOptions'=>array(
            'submit'=>array('delete','id'=>$model->id),
            'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Pemliharaan Matakuliah', 'url'=>array('admin')),
);
?>

<h1>Tabel Matakuliah #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'matakuliah',
		'sks',
		'semester',
		'jenis',
	),
)); ?>
