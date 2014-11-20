<?php
/* @var $this TblKhsController */
/* @var $model TblKhs */

$this->breadcrumbs=array(
	'Tbl Khs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblKhs', 'url'=>array('index')),
	array('label'=>'Create TblKhs', 'url'=>array('create')),
	array('label'=>'View TblKhs', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblKhs', 'url'=>array('admin')),
);
?>

<h1>Update TblKhs <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>