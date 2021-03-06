<?php

/**
 * This is the model class for table "tbl_semester".
 *
 * The followings are the available columns in table 'tbl_semester':
 * @property integer $id
 * @property string $ta_semester
 * @property string $tgl_mulai
 * @property string $tgl_akhir
 *
 * The followings are the available model relations:
 * @property TblKrs[] $tblKrs
 */
class TblSemester extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_semester';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ta_semester', 'length', 'max'=>10),
			array('tgl_mulai, tgl_akhir', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ta_semester, tgl_mulai, tgl_akhir', 'safe', 'on'=>'search'),
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
			'tblKrs' => array(self::HAS_MANY, 'TblKrs', 'semester_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ta_semester' => 'Ta Semester',
			'tgl_mulai' => 'Tanggal Mulai',
			'tgl_akhir' => 'Tanggal Akhir',
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
		$criteria->compare('ta_semester',$this->ta_semester,true);
		$criteria->compare('tgl_mulai',$this->tgl_mulai,true);
		$criteria->compare('tgl_akhir',$this->tgl_akhir,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblSemester the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
