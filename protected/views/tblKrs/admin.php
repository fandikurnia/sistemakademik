<?php
/* @var $this TblKrsController */
/* @var $model TblKrs */

$this->breadcrumbs=array(
	'Tbl Krs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TblKrs', 'url'=>array('index')),
	array('label'=>'Create TblKrs', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tbl-krs-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Pemeliharaan Tabel KRS</h1>

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
	'id'=>'tbl-krs-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'semester_id',
		'mahasiswa_id',
	//	'mkuliah_id',
                array(
                    'name'=>'mahasiswa_id',
                    'type'=>'raw',
                    'header'=>'NAMA MAHASISWA',
                    'value'=>'Chtml::encode($data->mahasiswa->nama)',
                    'htmlOptions'=>array('width'=>'20%'),
                ),
                'mkuliah_id',
                array(
                    'name'=>'id',
                    'type'=>'raw',
                    'header'=>'MATA KULIAH',
                    'value'=>'Chtml::encode($data->mkuliah->matakuliah)',
                    'htmlOptions'=>array('width'=>'20%'),
                ),
		'nilai',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
