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

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'tbl-khs-grid',
    'dataProvider'=>$model->searchKhs($nim->mahasiswa)
    
))