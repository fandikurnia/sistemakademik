<?php
/* @var $this MstMatakuliahController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tabel Matakuliah',
);

$this->menu=array(
	array('label'=>'Menambah Matakuliah', 'url'=>array('create')),
	array('label'=>'Pemeliharaan Matakuliah', 'url'=>array('admin')),
);
?>

<h1>Master Matakuliah</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
