<?php
/* @var $this TblKhsController */
/* @var $model TblKhs */

$this->breadcrumbs=array(
	'Tbl Khs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblKhs', 'url'=>array('index')),
	array('label'=>'Manage TblKhs', 'url'=>array('admin')),
);
?>

<h1>Create TblKhs</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>