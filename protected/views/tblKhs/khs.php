<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$this->breadcrumbs=array(
    'Nilai Semua KHS '=> array('index'),
    'Menampilkan Data',
);

Yii::app()->clientScript->registerScript('search', "
            $('.search-button').click(function(){
            $('.search-form').toggle();
    return false;
    ));
            $('.search-form form').submit(function() {
            $.fn.yiiGridView.update('tbl-khs-grid',  {
                data: ${this}.serialize()
    ));
    return false;
    ));");
?>

<h1> <center> Menampilkan Data Nilai </center></h1>

<?php  echo $this->renderPartial('_kopmhs', array(
    'nim'=>$nim,
)); ?>

<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array('model'=>$model,)); ?>
</div>
<!-- search form --> 
<div class="form">
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'tbl-khs-grid',
    'dataProvider'=>$model->searchKhs($nim->mahasiswa_id), 
    'selectableRows'=>2, 
    'template'=>'{items}{summary}{pager}',
    'summaryText'=>$nim::totalIpk($nim->mahasiswa_id),
    'emptyText'=>"Data tidak ditemukan..!",
    'columns'=>
    array(
        array(
            'header'=>'NO',
            'value'=> 
            '$this->grid->dataprovider->pagination->currentPage * 
             $this->grid->dataprovider->pagination->pageSize + ($row +1)',
            'htmlOptions'=>array('witdh'=>'3%',
            'style'=>'text-align:center'),
        ),
        array(
            'name'=>'id',
            'type'=>'raw',
            'header'=>'KODE',
            'value'=>'CHtml::encode($data->mkuliah_id)',
            'htmlOptions'=>array('width'=>'',
            'style'=>'text-align:center'),
        ),
        array(
            'name'=>'mkuliah_id',
            'type'=>'raw',
            'header'=>'MATA KULIAH',
            'value'=>'CHtml::encode($data->mkuliah_id->matakuliah)',
            'htmlOptions'=>array('width'=>'',
            'style'=>'text-align:center'),
        ),
        array(
            'name'=>'mkuliah_id',
            'type'=>'raw',
            'header'=>'SKS',
            'value'=>'CHtml::encode($data->mkuliah_id->sks)',
            'htmlOptions'=>array('width'=>'',
            'style'=>'text-align:center'),
        ),
        array(
            'name'=>'nilai',
            'type'=>'raw',
            'header'=>'NILAI',
            'value'=>'CHtml::encode($data->nilai)',
            'htmlOptions'=>array('width'=>'',
            'style'=>'text-align:center'),
        ),
        array(
            'name'=>'nilai',
            'type'=>'raw',
            'header'=>'SKOR',
            'value'=>'CHtml::encode($data->getSkor($data->nilai, $data->mkuliah->sks))',
            'htmlOptions'=>array('width'=>'',
            'style'=>'text-align:center'),
        ),
    ),
)); ?>
</div>