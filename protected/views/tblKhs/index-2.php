<?php
/* @var $this TblKhsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data KHS Mahahsiswa',
);
?>
<h1>DAFTAR MAHASISWA</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tbl-khs-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
	array(
	   'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage * 
				$this->grid->dataProvider->pagination->pageSize + ($row+1)',
			'htmlOptions'=>array('width'=>'3%','style'=>'text-align:center'),
		),
		array(
			'name'=>'nim',
			'type'=>'raw',
			'header'=>'NIM',
			//'value'=>'CHtml::encode($data->nim)',
			'value'=>'CHtml::link(CHtml::encode($data->nim),$data->khsUrl)',
			'htmlOptions'=>array('width'=>'10%'),
		),
		array(
			'name'=>'nama',
			'type'=>'raw',
			'header'=>'NAMA',
			//'value'=>'CHtml::encode($data->nama)',
		    'value'=>'CHtml::link(CHtml::encode($data->nama),$data->khsUrl)',
			'htmlOptions'=>array('width'=>'30%'),
		),
		array(
			'name'=>'jurusan_id',
			'type'=>'raw',
			'header'=>'JURUSAN',
			'value'=>'CHtml::encode($data->jurusan->jurusan)',
			//'value'=>'CHtml::link(CHtml::encode($data->mhs_id),$data->khsUrl)',
			'htmlOptions'=>array('width'=>'20%'),
		),
		
	),
)); ?>

<?php //$this->widget('zii.widgets.CListView', array(
	 //'dataProvider'=>$dataProvider,
	//'itemView'=>'_view',
	
//));  ?>
