<?php
/* @var $this TblMahasiswaController */
/* @var $model TblMahasiswa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-mahasiswa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nim'); ?>
		<?php echo $form->textField($model,'nim',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'nim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tempat_lahir'); ?>
		<?php echo $form->textField($model,'tempat_lahir',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tempat_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'tanggal_lahir')?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                        array(
                            'model'=>$model,
                            'attribute'=>'tanggal_lahir',
                            'value'=> $model->tanggal_lahir,
                            'options'=> array(
                                    'dateFormat'=>'yy-mm-dd',
                                    'showOn'=>'button',
                                    'yearRange'=>'-100',
                                    'changeMonth'=> 'true',
                                    'changeYear'=> 'true',
                                    'constrainInput'=>'false',
                                    'duration'=>'fast',
                                    'showAnim'=>'slide',
                            ),
                            'htmlOptions'=>array('size'=>20,),
                        )
                        );?>
                <?php echo $form->error($model,'tanggal_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_kelamin'); ?>
                <?php /*echo $form->dropDownList($model, 
                        'jenis_kelamin', 
                        TblMahasiswa::jenisKel(),
                        array('prompt'=>'= Pilihan =', 
                              'style'=>'width:200px;'));*/?>
		<?php echo $form->error($model,'jenis_kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agama'); ?>
		<?php echo $form->dropDownList($model,
                        'agama', TblMahasiswa::agama(),
                        array('prompt'=>'= Pilihan =', 
                        'style'=>'width:200px;'));?>
		<?php echo $form->error($model,'agama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jurusan_id'); ?>
                <?php echo $form->dropDownList($model,
                        'jurusan_id',  CHtml::listData(
                                TblJurusan::model()->findAll(), 'id',
                         'jurusan'), array('prompt'=>''
                             . '= Pilihan =','style'=>'width:200px;')); ?>
		<?php echo $form->error($model,'jurusan_id'); ?>
	</div>
<!--
	<div class="row">
		<?php /*echo $form->labelEx($model,'kunci'); ?>
		<?php echo $form->textField($model,'kunci',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'kunci'); */?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->