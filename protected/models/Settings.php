<?php

/**
 * This is the model class for table "settings".
 *
 * The followings are the available columns in table 'settings':
 * @property integer $id
 * @property string $facebook
 * @property string $google
 * @property string $twitter
 * @property string $pinterest
 * @property string $email
 * @property string $press_email
 * @property string $support_email
 * @property string $blog_email
 * @property string $paypal_email
 * @property integer $temp1
 * @property integer $temp2
 * @property integer $temp3
 * @property integer $temp4
 * @property string $api_username
 * @property string $api_password
 * @property string $signature
 * @property string $paypal_fee
 * @property string $paypalextra_fee
 * @property string $site_commession
 * @property string $phone
 * @property string $mobile
 * @property string $fax
 * @property string $address
 * @property integer $paypal_live
 */
class Settings extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'settings';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('temp1, temp2, temp3, temp4, paypal_live', 'numerical', 'integerOnly'=>true),
			array('facebook, google, twitter, pinterest, email, press_email, support_email, blog_email, paypal_email, api_username, api_password, signature, paypal_fee, paypalextra_fee, site_commession, phone, mobile, fax, address', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, facebook, google, twitter, pinterest, email, press_email, support_email, blog_email, paypal_email, temp1, temp2, temp3, temp4, api_username, api_password, signature, paypal_fee, paypalextra_fee, site_commession, phone, mobile, fax, address', 'safe', 'on'=>'search'),
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
			'facebook' => 'Facebook',
			'google' => 'Google',
			'twitter' => 'Twitter',
			'pinterest' => 'Pinterest',
			'email' => 'Email',
			'press_email' => 'Press Email',
			'support_email' => 'Support Email',
			'blog_email' => 'Blog Email',
			'paypal_email' => 'Paypal Email',
			'temp1' => 'Temp1',
			'temp2' => 'Temp2',
			'temp3' => 'Temp3',
			'temp4' => 'Temp4',
			'api_username' => 'PayPal Username',
			'api_password' => 'PayPal Password',
			'signature' => 'PayPal Signature',
			'paypal_fee' => 'Paypal Fee',
			'paypalextra_fee' => 'Paypalextra Fee',
			'site_commession' => 'Site Commession',
			'phone' => 'Phone',
			'mobile' => 'Mobile',
			'fax' => 'Fax',
			'address' => 'Address',
			'paypal_live' => 'PayPal Live',

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
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('google',$this->google,true);
		$criteria->compare('twitter',$this->twitter,true);
		$criteria->compare('pinterest',$this->pinterest,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('press_email',$this->press_email,true);
		$criteria->compare('support_email',$this->support_email,true);
		$criteria->compare('blog_email',$this->blog_email,true);
		$criteria->compare('paypal_email',$this->paypal_email,true);
		$criteria->compare('temp1',$this->temp1);
		$criteria->compare('temp2',$this->temp2);
		$criteria->compare('temp3',$this->temp3);
		$criteria->compare('temp4',$this->temp4);
		$criteria->compare('api_username',$this->api_username,true);
		$criteria->compare('api_password',$this->api_password,true);
		$criteria->compare('signature',$this->signature,true);
		$criteria->compare('paypal_fee',$this->paypal_fee,true);
		$criteria->compare('paypalextra_fee',$this->paypalextra_fee,true);
		$criteria->compare('site_commession',$this->site_commession,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('address',$this->address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Settings the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
