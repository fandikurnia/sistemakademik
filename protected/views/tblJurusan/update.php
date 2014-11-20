<?php
/* @var $this TblJurusanController */
/* @var $model TblJurusan */

$this->breadcrumbs=array(
	'Tbl Jurusans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblJurusan', 'url'=>array('index')),
	array('label'=>'Create TblJurusan', 'url'=>array('create')),
	array('label'=>'View TblJurusan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblJurusan', 'url'=>array('admin')),
);
?>

<h1>Update TblJurusan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>