<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $firstname
 * @property string $lastname
 * @property string $activation_key
 * @property string $created_on
 * @property string $updated_on
 * @property string $last_visit_on
 * @property string $password_set_on
 * @property integer $email_verified
 * @property integer $is_active
 * @property integer $is_disabled
 * @property string $one_time_password_secret
 * @property string $one_time_password_code
 * @property integer $one_time_password_counter
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, created_on', 'required'),
			array('email_verified, is_active, is_disabled, one_time_password_counter', 'numerical', 'integerOnly'=>true),
			array('username, password, email, firstname, lastname, activation_key, one_time_password_secret, one_time_password_code', 'length', 'max'=>255),
			array('updated_on, last_visit_on, password_set_on', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, email, firstname, lastname, activation_key, created_on, updated_on, last_visit_on, password_set_on, email_verified, is_active, is_disabled, one_time_password_secret, one_time_password_code, one_time_password_counter', 'safe', 'on'=>'search'),
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
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'activation_key' => 'Activation Key',
			'created_on' => 'Created On',
			'updated_on' => 'Updated On',
			'last_visit_on' => 'Last Visit On',
			'password_set_on' => 'Password Set On',
			'email_verified' => 'Email Verified',
			'is_active' => 'Is Active',
			'is_disabled' => 'Is Disabled',
			'one_time_password_secret' => 'One Time Password Secret',
			'one_time_password_code' => 'One Time Password Code',
			'one_time_password_counter' => 'One Time Password Counter',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('activation_key',$this->activation_key,true);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('updated_on',$this->updated_on,true);
		$criteria->compare('last_visit_on',$this->last_visit_on,true);
		$criteria->compare('password_set_on',$this->password_set_on,true);
		$criteria->compare('email_verified',$this->email_verified);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('is_disabled',$this->is_disabled);
		$criteria->compare('one_time_password_secret',$this->one_time_password_secret,true);
		$criteria->compare('one_time_password_code',$this->one_time_password_code,true);
		$criteria->compare('one_time_password_counter',$this->one_time_password_counter);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
      

	protected function beforeSave()
	{
		if ($this->isNewRecord) {
			$this->created_on = date('Y-m-d H:i:s');
		} else {
			$this->updated_on = date('Y-m-d H:i:s');
		}
		return parent::beforeSave();
	}
}