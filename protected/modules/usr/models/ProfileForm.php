<?php

/**
 * ProfileForm class.
 * ProfileForm is the data structure for keeping
 * password recovery form data. It is used by the 'recovery' action of 'DefaultController'.
 */
class ProfileForm extends BaseUsrForm
{
	public $username;
	public $email;
	public $firstName;
	public $lastName;

	private $_identity;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array_merge($this->getBehaviorRules(), array(
			array('username, email, firstName, lastName', 'filter', 'filter'=>'trim'),
			array('username, email, firstName, lastName', 'default', 'setOnEmpty'=>true, 'value' => null),

			array('username, email', 'required'),
			array('username, email', 'uniqueIdentity'),
		));
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array_merge($this->getBehaviorLabels(), array(
			'username'		=> Yii::t('UsrModule.usr','Username'),
			'email'			=> Yii::t('UsrModule.usr','Email'),
			'firstName'		=> Yii::t('UsrModule.usr','First name'),
			'lastName'		=> Yii::t('UsrModule.usr','Last name'),
		));
	}

	public function behaviors()
	{
		if (Yii::app()->controller->module->captcha !== null) {
			return array(
				'captcha' => array(
					'class' => 'CaptchaFormBehavior',
					'ruleOptions' => array('except'=>'reset,verify'),
				),
			);
		}
		return array();
	}

	public function getIdentity()
	{
		if($this->_identity===null) {
			$userIdentityClass = Yii::app()->controller->module->userIdentityClass;
			if ($this->scenario == 'register') {
				$this->_identity = new $userIdentityClass(null, null);
			} else {
				$this->_identity = $userIdentityClass::find(array('id'=>Yii::app()->user->getId()));
			}
			if (!($this->_identity instanceof IEditableIdentity)) {
				throw new CException(Yii::t('UsrModule.usr','The {class} class must implement the {interface} interface.',array('{class}'=>get_class($this->_identity),'{interface}'=>'IEditableIdentity')));
			}
		}
		return $this->_identity;
	}

	public function uniqueIdentity($attribute,$params)
	{
		if($this->hasErrors()) {
			return;
		}
		$userIdentityClass = Yii::app()->controller->module->userIdentityClass;
		$existingIdentity = $userIdentityClass::find(array($attribute => $this->$attribute));
		if ($existingIdentity !== null && ($this->scenario == 'register' || $existingIdentity->getId() != $this->getIdentity()->getId())) {
			$this->addError($attribute,Yii::t('UsrModule.usr','{attribute} has already been used by another user.', array('{attribute}'=>$this->$attribute)));
			return false;
		}
		return true;
	}

	/**
	 * Logs in the user using the given username.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		$identity = $this->getIdentity();

		return Yii::app()->user->login($identity,0);
	}
        
         public function saveCompany($subdomain)
	{
            
		$identity = $this->getIdentity();
		if ($identity === null)
			return false;
                
		if (($record=User::model()->findByPk($identity->id))!==null) {
			
			$company = new AccountOwner;
			$company->tenant = $subdomain;
                        $company->name = $subdomain;
                        $company->save(false);
			$record->company_id = $company->id;
                        $record->save();
                        return $record->company_id;
		}
		return false;
	}

	/**
	 * Updates the identity with this models attributes and saves it.
	 */
	public function save()
	{
		$identity = $this->getIdentity();
		if ($identity === null)
			return false;

		$identity->setAttributes(array(
			'username'	=> $this->username,
			'email'		=> $this->email,
			'firstName'	=> $this->firstName,
			'lastName'	=> $this->lastName,
		));
		if ($identity->save()) {
			$this->_identity = $identity;
                        $this->saveCompany('ahoj');
			return true;
		}
		return false;
	}
}
