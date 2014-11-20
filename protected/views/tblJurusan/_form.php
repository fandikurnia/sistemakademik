<?php
/* @var $this TblJurusanController */
/* @var $model TblJurusan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-jurusan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jenjang'); ?>
		<?php echo $form->textField($model,'jenjang',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'jenjang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jurusan'); ?>
		<?php echo $form->textField($model,'jurusan',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'jurusan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'singkat'); ?>
		<?php echo $form->textField($model,'singkat',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'singkat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->