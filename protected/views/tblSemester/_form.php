<?php
/* @var $this TblSemesterController */
/* @var $model TblSemester */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-semester-form',	
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ta_semester'); ?>
		<?php echo $form->textField($model,'ta_semester',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ta_semester'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->