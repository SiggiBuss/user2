<?php

/**
 * This is the model class for table "Account_Owner".
 *
 * The followings are the available columns in table 'Account_Owner':
 * @property integer $id
 * @property string $name
 * @property string $tenant
 * @property integer $type
 * @property string $profession
 * @property integer $county
 * @property integer $currency
 * @property string $street1
 * @property string $street2
 * @property string $city
 * @property string $state
 * @property string $zip
 */
class AccountOwner extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AccountOwner the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Account_Owner';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, tenant, type, profession, county, currency, street1, street2, city, state, zip', 'required'),
			array('type, county, currency', 'numerical', 'integerOnly'=>true),
			array('name, street1, street2, city', 'length', 'max'=>45),
			array('tenant', 'length', 'max'=>40),
			array('profession', 'length', 'max'=>50),
			array('state', 'length', 'max'=>20),
			array('zip', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, tenant, type, profession, county, currency, street1, street2, city, state, zip', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'tenant' => 'Tenant',
			'type' => 'Type',
			'profession' => 'Profession',
			'county' => 'County',
			'currency' => 'Currency',
			'street1' => 'Street1',
			'street2' => 'Street2',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('tenant',$this->tenant,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('profession',$this->profession,true);
		$criteria->compare('county',$this->county);
		$criteria->compare('currency',$this->currency);
		$criteria->compare('street1',$this->street1,true);
		$criteria->compare('street2',$this->street2,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}