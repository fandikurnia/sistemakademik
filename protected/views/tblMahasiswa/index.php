<?php
/* @var $this TblMahasiswaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Mahasiswas',
);

$this->menu=array(
	array('label'=>'Create TblMahasiswa', 'url'=>array('create')),
	array('label'=>'Manage TblMahasiswa', 'url'=>array('admin')),
);
?>

<h1>Tbl Mahasiswas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
