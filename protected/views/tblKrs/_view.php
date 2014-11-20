<?php
/* @var $this TblKrsController */
/* @var $data TblKrs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('semester_id')); ?>:</b>
	<?php echo CHtml::encode($data->semester_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mahasiswa_id')); ?>:</b>
	<?php echo CHtml::encode($data->mahasiswa_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mkuliah_id')); ?>:</b>
	<?php echo CHtml::encode($data->mkuliah_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai')); ?>:</b>
	<?php echo CHtml::encode($data->nilai); ?>
	<br />


</div>