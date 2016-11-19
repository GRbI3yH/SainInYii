<?php

/**
 * This is the model class for table "properties_tovar".
 *
 * The followings are the available columns in table 'properties_tovar':
 * @property integer $id
 * @property integer $id_properties
 * @property integer $id_tovar
 * @property string $value
 *
 * The followings are the available model relations:
 * @property Properties $idProperties
 * @property Tovar $idTovar
 */
class PropertiesTovar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'properties_tovar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('value', 'required'),
			array('id_properties, id_tovar', 'numerical', 'integerOnly'=>true),
			array('value', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_properties, id_tovar, value', 'safe', 'on'=>'search'),
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
			'idProperties' => array(self::BELONGS_TO, 'Properties', 'id_properties'),
			'idTovar' => array(self::BELONGS_TO, 'Tovar', 'id_tovar'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_properties' => 'Id Properties',
			'id_tovar' => 'Id Tovar',
			'value' => 'Value',
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
		$criteria->compare('id_properties',$this->id_properties);
		$criteria->compare('id_tovar',$this->id_tovar);
		$criteria->compare('value',$this->value,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PropertiesTovar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
