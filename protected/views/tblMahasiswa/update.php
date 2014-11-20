<?php
/* @var $this TblMahasiswaController */
/* @var $model TblMahasiswa */

$this->breadcrumbs=array(
	'Tbl Mahasiswas'=>array('index'),
	$model->nim=>array('view','id'=>$model->nim),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblMahasiswa', 'url'=>array('index')),
	array('label'=>'Create TblMahasiswa', 'url'=>array('create')),
	array('label'=>'View TblMahasiswa', 'url'=>array('view', 'id'=>$model->nim)),
	array('label'=>'Manage TblMahasiswa', 'url'=>array('admin')),
);
?>

<h1>Update TblMahasiswa <?php echo $model->nim; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>