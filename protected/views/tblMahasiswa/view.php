<?php
/* @var $this TblMahasiswaController */
/* @var $model TblMahasiswa */

$this->breadcrumbs=array(
	'Tbl Mahasiswas'=>array('index'),
	$model->nim,
);

$this->menu=array(
	array('label'=>'List TblMahasiswa', 'url'=>array('index')),
	array('label'=>'Create TblMahasiswa', 'url'=>array('create')),
	array('label'=>'Update TblMahasiswa', 'url'=>array('update', 'id'=>$model->nim)),
	array('label'=>'Delete TblMahasiswa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nim),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblMahasiswa', 'url'=>array('admin')),
);
?>

<h1>View TblMahasiswa #<?php echo $model->nim; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nim',
		'nama',
		'alamat',
		'tempat_lahir',
		'tanggal_lahir',
		'jenis_kelamin',
		'agama',
		'jurusan_id',
		'kunci',
	),
)); ?>
