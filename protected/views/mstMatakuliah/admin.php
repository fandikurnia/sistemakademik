<?php
/* @var $this MstMatakuliahController */
/* @var $model MstMatakuliah */

$this->breadcrumbs=array(
	'Tabel Matakuliah'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Daftar Matakuliah', 'url'=>array('index')),
	array('label'=>'Tambah Matakuliah', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mst-matakuliah-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Pemeliharaan Tabel Mata Kuliah</h1>

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

<?php /* $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mst-matakuliah-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'matakuliah',
		'sks',
		'semester',
		'jenis',
		array(
			'class'=>'CButtonColumn',
		),
	),
));
*/
    $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'mst-matakuliah-grid', 
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'columns'=>array(
        array(
            'name'=>'id',
            'type'=>'raw',
            'header' => 'ID',
            'value'=> 'CHtml::encode($data->id)',
            'htmlOptions'=>array('width'=>'10%'),
        ),
        array(
           'name'=>'matakuliah',
           'type'=>'raw',
           'header'=>'MATAKULIAH',
           'value'=>'CHtml::encode(
                    $data->matakuliah)',
           'htmlOptions' => array('width'=>'50%'),
        ),
        array(
           'name'=>'sks',
           'type'=>'raw',
           'header'=>'SKS',
           'value'=>'CHtml::encode($data->sks)',
           'htmlOptions'=>array('width'=>'10%'),
        ),
        array (
           'name'=>'semester',
           'type'=>'raw',
           'header'=>'SMT',
           'value'=>'CHtml::encode($data->semester)',
           'htmlOptions'=>array('width'=>'10%'),
        ),
    array(
        'class'=> 'CButtonColumn',
    ),
),
));
?>
