<?php
/* @var $this TblKrsController */
/* @var $model TblKrs */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-krs-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'semester_id'); ?>
                <?php echo $form->dropDownList($model,
                        'semester_id',  CHtml::listData(
                        TblSemester::model()->findAll(), 'id', 'ta_semester'),
                        array('prompt'=>'= Pilihan =',
                              'style'=>'width:100px;')); ?>
		<?php echo $form->error($model,'semester_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mahasiswa_id'); ?>
		 <?php echo $form->dropDownList($model,
                        'mahasiswa_id',  CHtml::listData(
                        TblMahasiswa::model()->findAll(), 'nim', 'nim'),
                        array('prompt'=>'= Pilihan =',
                              'style'=>'width:100px;')); ?>
		<?php echo $form->error($model,'mahasiswa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mkuliah_id'); ?>
		 <?php echo $form->dropDownList($model,
                        'mkuliah_id',  CHtml::listData(
                        MstMatakuliah::model()->findAll(), 'id', 'matakuliah'),
                        array('prompt'=>'= Pilihan =',
                              'style'=>'width:400px;')); ?>
		<?php echo $form->error($model,'mkuliah_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->