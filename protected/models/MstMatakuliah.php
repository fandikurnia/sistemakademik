<?php

/**
 * This is the model class for table "mst_matakuliah".
 *
 * The followings are the available columns in table 'mst_matakuliah':
 * @property integer $id
 * @property string $matakuliah
 * @property integer $sks
 * @property integer $semester
 * @property string $jenis
 *
 * The followings are the available model relations:
 * @property TblKrs[] $tblKrs
 */
class MstMatakuliah extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mst_matakuliah';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sks, semester', 'numerical', 'integerOnly'=>true),
			array('matakuliah', 'length', 'max'=>50),
			array('jenis', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, matakuliah, sks, semester, jenis', 'safe', 'on'=>'search'),
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
			'tblKrs' => array(self::HAS_MANY, 'TblKrs', 'mkuliah_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'matakuliah' => 'Matakuliah',
			'sks' => 'Sks',
			'semester' => 'Semester',
			'jenis' => 'Jenis',
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
		$criteria->compare('matakuliah',$this->matakuliah,true);
		$criteria->compare('sks',$this->sks);
		$criteria->compare('semester',$this->semester);
		$criteria->compare('jenis',$this->jenis,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        Public static function sks()
        {
            return array(
                '1'=>'1',
                '2'=>'2',
                '3'=>'3',
                '4'=>'4',
                '5'=>'5',
                '6'=>'6',
            );
        }
        
        Public static function smt()
        {
            return array(
                '1'=>'1',
                '2'=>'2',
                '3'=>'3',
                '4'=>'4',
                '5'=>'5',
                '6'=>'6',
                '7'=>'7',
                '8'=>'8',
            );
        }
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MstMatakuliah the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
