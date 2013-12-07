<?php

/**
 * This is the model class for table "country_currency".
 *
 * The followings are the available columns in table 'country_currency':
 * @property integer $id
 * @property string $currency_code
 * @property string $currency_format
 * @property string $country_en
 * @property string $country_de
 */
class CountryCurrency extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CountryCurrency the static model class
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
		return 'country_currency';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('currency_code, currency_format, country_en, country_de', 'required'),
			array('currency_code', 'length', 'max'=>3),
			array('currency_format', 'length', 'max'=>5),
			array('country_en, country_de', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, currency_code, currency_format, country_en, country_de', 'safe', 'on'=>'search'),
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
			'currency_code' => 'Currency Code',
			'currency_format' => 'Currency Format',
			'country_en' => 'Country En',
			'country_de' => 'Country De',
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
		$criteria->compare('currency_code',$this->currency_code,true);
		$criteria->compare('currency_format',$this->currency_format,true);
		$criteria->compare('country_en',$this->country_en,true);
		$criteria->compare('country_de',$this->country_de,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
      public function getCurrencyName()
        {
            return $this->currency_format.' '.$this->country_de;
        }
}