<?php
/* @var $this TblMahasiswaController */
/* @var $model TblMahasiswa */

$this->breadcrumbs=array(
	'Tbl Mahasiswas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TblMahasiswa', 'url'=>array('index')),
	array('label'=>'Create TblMahasiswa', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tbl-mahasiswa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Pemiliharaan Data Mahasiswa</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tbl-mahasiswa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nim',
		'nama',
		'alamat',
		'tempat_lahir',
		'tanggal_lahir',
            /*
		array(
			'name'=>'jurusan_id',
			'type'=>'raw',
			'header'=>'JURUSAN',
			'value'=>'CHtml::encode($data->jurusan->jurusan)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'jurusan_id',
			'type'=>'raw',
			'header'=>'JENIS KEL',
			'value'=>'CHtml::encode($data->ubahJk())',
			'htmlOptions'=>array('width'=>''),
		),
		
		*/
		/*
		'agama',
		'jurusan_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<?php /* $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tbl-mahasiswa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nim',
		'nama',
		'alamat',
		'tempat_lahir',
		'tanggal_lahir',
		array(
                    'name'=>'jurusan_id',
                    'type'=>'raw',
                    'header'=>'JURUSAN',
                    'value'=> 'CHtml::encode($data->jurusan->jurusan)',
                    'htmlOptions'=> array('width'=>''),
                ),
                array(
                    'name'=>'jurusan_id',
                    'type'=>'raw',
                    'header'=>'JENIS KEL',
                    'value'=>'CHtml::encode($data->ubahJk())',
                    'htmlOptions'=>array('width'=>''),  
                ),
                /*
		'agama',
		'jurusan_id',
		'kunci',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
));*/ ?>
