<?php
/* @var $this TblKrsController */
/* @var $model TblKrs */

$this->breadcrumbs=array(
	'Tbl Krs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblKrs', 'url'=>array('index')),
	array('label'=>'Manage TblKrs', 'url'=>array('admin')),
);
?>

<h1>Create TblKrs</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>