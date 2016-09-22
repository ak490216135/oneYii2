<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{

	public static function tableName(){
		return 'yii_user';
	}

	public static function findIdentity($id){
		// 自动登录时调用
		$temp = parent::find()->where(['id' => $id])->one();
		// 判断是否登陆过
		if ( isset($temp) ) {
			return new static($temp);
		} else {
			return null;
		}
	}

    public static function findIdentityByAccessToken($token, $type = null){
        return static::findOne(['at' => $token]);  
    }

    public function getId(){
        return $this->id;
    }

    public function getAuthKey(){
        return $this->ak;
    }

    public function validateAuthKey($authKey){
        return $this->ak === $authKey;
    }

    public function validatePassword($password){
        return $this->password === $password;
    }
}

