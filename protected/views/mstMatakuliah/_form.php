<?php
/* @var $this MstMatakuliahController */
/* @var $model MstMatakuliah */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mst-matakuliah-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'matakuliah'); ?>
		<?php echo $form->textField($model,'matakuliah',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'matakuliah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sks'); ?>
		<?php echo $form->dropDownList($model, 'sks', MstMatakuliah::sks(),array('prompt'=>'= Pilihan =',
                    'style'=>'width:200px;')); ?>
		<?php echo $form->error($model,'sks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semester'); ?>
		<?php echo $form->dropDownList($model, 'semester', MstMatakuliah::smt(),array('prompt'=>'= Pilihan =',
                    'style'=>'width:200px;')); ?>
		<?php echo $form->error($model,'semester'); ?>
	</div>

	<div class="row">
                <?php echo $form->radioButtonList($model, 'jenis', array('T'=>'Teori', 
                    'P'=>'Praktik')); ?>
		<?php echo $form->error($model,'jenis'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->