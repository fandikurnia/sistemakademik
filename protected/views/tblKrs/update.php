<?php
/* @var $this TblKrsController */
/* @var $model TblKrs */

$this->breadcrumbs=array(
	'Tbl Krs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblKrs', 'url'=>array('index')),
	array('label'=>'Create TblKrs', 'url'=>array('create')),
	array('label'=>'View TblKrs', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblKrs', 'url'=>array('admin')),
);
?>

<h1>Update TblKrs <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>