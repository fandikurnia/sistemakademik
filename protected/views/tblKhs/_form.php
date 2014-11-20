<?php
/* @var $this TblKhsController */
/* @var $model TblKhs */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-khs-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'semester_id'); ?>
		<?php echo $form->textField($model,'semester_id'); ?>
		<?php echo $form->error($model,'semester_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mahasiswa_id'); ?>
		<?php echo $form->textField($model,'mahasiswa_id',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'mahasiswa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mkuliah_id'); ?>
		<?php echo $form->textField($model,'mkuliah_id'); ?>
		<?php echo $form->error($model,'mkuliah_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai'); ?>
		<?php echo $form->textField($model,'nilai',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'nilai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->