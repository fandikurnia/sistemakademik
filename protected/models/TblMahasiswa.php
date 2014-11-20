<?php

/**
 * This is the model class for table "tbl_mahasiswa".
 *
 * The followings are the available columns in table 'tbl_mahasiswa':
 * @property string $nim
 * @property string $nama
 * @property string $alamat
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $agama
 * @property integer $jurusan_id
 * @property string $kunci
 *
 * The followings are the available model relations:
 * @property TblKrs[] $tblKrs
 * @property TblJurusan $jurusan
 */
class TblMahasiswa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_mahasiswa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nim', 'required'),
			array('jurusan_id', 'numerical', 'integerOnly'=>true),
			array('nim', 'length', 'max'=>6),
			array('nama, alamat, tempat_lahir', 'length', 'max'=>50),
			array('jenis_kelamin', 'length', 'max'=>1),
			array('agama', 'length', 'max'=>15),
			array('kunci', 'length', 'max'=>20),
			array('tanggal_lahir', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nim, nama, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, jurusan_id, kunci', 'safe', 'on'=>'search'),
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
			'tblKrs' => array(self::HAS_MANY,
                            'TblKrs', 'mahasiswa_id'),
			'jurusan' => array(self::BELONGS_TO,
                            'TblJurusan', 'jurusan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nim' => 'Nim',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'jenis_kelamin' => 'Jenis Kelamin',
			'agama' => 'Agama',
			'jurusan_id' => 'Jurusan',
			'kunci' => 'Kunci',
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

		$criteria->compare('nim',$this->nim,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('agama',$this->agama,true);
		$criteria->compare('jurusan_id',$this->jurusan_id);
		$criteria->compare('kunci',$this->kunci,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public static function jenisKel()
        {
            return array(
                'L'=> 'Laki-laki',
                'P'=> 'Perempuan',
            );
        }
        
        public static function ubahJK()
        {
            if($this->jenis_kelamin=="L")
                return "Laki-laki";
            else return "Perempuan";
        }
        
        public static function agama()
        {
            return array(
              'ISLAM' => 'ISLAM',
              'PROTESTAN'=>'PROTESTAN',
              'KATHOLIK'=>'KATHOLIK',
              'HINDU'=>'HINDU',
              'BUDHA'=>'BUDHA',
              'LAINNYA'=> 'LAINNYA',
            );
        }
        
        public function getKhsUrl() {
            return Yii::app()->createUrl('/tblKhs/khs',array(
                'id'=>$this->nim,
            ));
        }
        /**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblMahasiswa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
