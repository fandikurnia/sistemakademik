<?php
/* @var $this TblKrsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Krs',
);

$this->menu=array(
	array('label'=>'Create TblKrs', 'url'=>array('create')),
	array('label'=>'Manage TblKrs', 'url'=>array('admin')),
);
?>

<h1>Tbl Krs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
