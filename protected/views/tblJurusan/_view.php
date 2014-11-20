<?php
/* @var $this TblJurusanController */
/* @var $data TblJurusan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenjang')); ?>:</b>
	<?php echo CHtml::encode($data->jenjang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jurusan')); ?>:</b>
	<?php echo CHtml::encode($data->jurusan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('singkat')); ?>:</b>
	<?php echo CHtml::encode($data->singkat); ?>
	<br />


</div>