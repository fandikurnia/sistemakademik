<?php
/* @var $this TblSemesterController */
/* @var $data TblSemester */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ta_semester')); ?>:</b>
	<?php echo CHtml::encode($data->ta_semester); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_akhir); ?>
	<br />


</div>