<?php

/**
 * This is the model class for table "tbl_jurusan".
 *
 * The followings are the available columns in table 'tbl_jurusan':
 * @property integer $id
 * @property string $jenjang
 * @property string $jurusan
 * @property string $singkat
 *
 * The followings are the available model relations:
 * @property TblMahasiswa[] $tblMahasiswas
 */
class TblJurusan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_jurusan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jenjang', 'length', 'max'=>4),
			array('jurusan', 'length', 'max'=>30),
			array('singkat', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, jenjang, jurusan, singkat', 'safe', 'on'=>'search'),
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
			'tblMahasiswas' => array(self::HAS_MANY, 'TblMahasiswa', 'jurusan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'jenjang' => 'Jenjang',
			'jurusan' => 'Jurusan',
			'singkat' => 'Singkat',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('jenjang',$this->jenjang,true);
		$criteria->compare('jurusan',$this->jurusan,true);
		$criteria->compare('singkat',$this->singkat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblJurusan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
