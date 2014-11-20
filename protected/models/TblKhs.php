<?php

/**
 * This is the model class for table "tbl_krs".
 *
 * The followings are the available columns in table 'tbl_krs':
 * @property string $id
 * @property integer $semester_id
 * @property string $mahasiswa_id
 * @property integer $mkuliah_id
 * @property string $nilai
 *
 * The followings are the available model relations:
 * @property TblSemester $semester
 * @property TblMahasiswa $mahasiswa
 * @property MstMatakuliah $mkuliah
 */
class TblKhs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_krs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('semester_id, mahasiswa_id, mkuliah_id', 'required'),
			array('semester_id, mkuliah_id', 'numerical', 'integerOnly'=>true),
			array('mahasiswa_id', 'length', 'max'=>9),
			array('nilai', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, semester_id, mahasiswa_id, mkuliah_id, nilai', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'semester' => array(self::BELONGS_TO, 'TblSemester', 'semester_id'),
			'mahasiswa' => array(self::BELONGS_TO, 'TblMahasiswa', 'mahasiswa_id'),
			'mkuliah' => array(self::BELONGS_TO, 'MstMatakuliah', 'mkuliah_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'semester_id' => 'Semester',
			'mahasiswa_id' => 'Mahasiswa',
			'mkuliah_id' => 'Mata Kuliah',
			'nilai' => 'Nilai',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		/*$criteria->compare('id',$this->id,true);
		$criteria->compare('semester_id',$this->semester_id);
		$criteria->compare('mahasiswa_id',$this->mahasiswa_id,true);
		$criteria->compare('mkuliah_id',$this->mkuliah_id);
		$criteria->compare('nilai',$this->nilai,true);
                */
                $criteria->compare('nim',$this->nim,true);
                $criteria->compare('nama',$this->nama,true);
                $criteria->compare('alamat',$this->alamat,true);
                $criteria->compare('tempat_lahir',$this->tempat_lahir,true);
                $criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
                $criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
                $criteria->compare('agama',$this->agama,true);
                $criteria->compare('jurusan_id',$this->jurusan_id);
             
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        /*************************************************************************
         * Fungsi untuk mencatat KHS dengan menggunakan 
         * filter parameter $imhs_id
         ************************************************************************/
        
        public function searchKhs($imhs_id){
            $criteria = new CDbCriteria(array(
                'condition'=>'mahasiswa_id=:mhs_id',
                'params'=>array(':mhs_id'=>$imhs_id),
                'order'=>'semester_id,mkuliah_id',
            ));
        
            return new CActiveDataProvider($this, array(
               'criteria'=>$criteria, 
            ));
        }
        
        /*************************************************************************
         * Fungsi untuk menghitung IPKS dengan 
         * filter parameter $id
         ************************************************************************/
        public static function  totalIpk($id){
            $models=  self::model()->findAll(array(
               'condition'=>'mahasiswa_id=:vmhs',
               'params'=>array(':vhms'=>$id),));
            $jsks=0;
            $jbobot=0;
            
            foreach($models as $model){
                $jsks +=$model->mkuliah->sks;
                $jbobot +=TblKhs::getSkor(
                        $model->nilai,
                        $model->mkuliah->sks);
            }
            
            return "Jumlah SKS = " . $jsks .
                "<br> IPK = " . number_format(
                 $jbobot/$jsks,2,'.','');
        }
        
         
        /*************************************************************************
         * Fungsi untuk menghitung Skor Nilai
         * filter parameter $nilai, dan $sks
         ************************************************************************/
        public static function getSkor ($nilai, $sks)
        {
            if ($nilai=="A")
                    return $sks*4;
                    else if ($nilai=="B")
                        return $sks*3;
                        else if ($nilai=="C")
                            return $sks*2;
                            else if ($nilai=="D")
                                return $sks*1;
                                    else return 0;                   
        }

        /**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblKhs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
