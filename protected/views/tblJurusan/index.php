<?php
/* @var $this TblJurusanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Jurusans',
);

$this->menu=array(
	array('label'=>'Create TblJurusan', 'url'=>array('create')),
	array('label'=>'Manage TblJurusan', 'url'=>array('admin')),
);
?>

<h1>Tbl Jurusans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
