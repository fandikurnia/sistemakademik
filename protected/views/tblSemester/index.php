<?php
/* @var $this TblSemesterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Semesters',
);

$this->menu=array(
	array('label'=>'Create TblSemester', 'url'=>array('create')),
	array('label'=>'Manage TblSemester', 'url'=>array('admin')),
);
?>

<h1>Tbl Semesters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
