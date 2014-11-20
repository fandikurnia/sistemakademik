<?php
/* @var $this MstMatakuliahController */
/* @var $data MstMatakuliah */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matakuliah')); ?>:</b>
	<?php echo CHtml::encode($data->matakuliah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sks')); ?>:</b>
	<?php echo CHtml::encode($data->sks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('semester')); ?>:</b>
	<?php echo CHtml::encode($data->semester); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis')); ?>:</b>
	<?php echo CHtml::encode($data->jenis); ?>
	<br />


</div>