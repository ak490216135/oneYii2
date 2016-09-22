<?php

namespace app\models;

use Yii;
use yii\base\Model;

use app\models\User;

/**
 * LoginForm is the model behind the login form.
 */
class LoginForm extends Model
{
    public $username;
    public $password;

    private $_user = false;

    public function rules()
    {
        return [
            [['username', 'password'], 'required', 'message' => '不能为空!'],
            ['username', 'email', 'message' => '登录为邮箱格式!'],
            // 4
            ['password', 'validatePassword'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => '用户名(邮箱格式)',
            'password' => '密码',
        ];
    }
    // 2
    public function login()
    {
        // 3
        if ($this->validate()) {
            // 10
            return Yii::$app->user->login($this->getUser(), 3600*24*30);
        }
        return false;
    }

    // 5
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            // 6
            $user = $this->getUser();
            if (!$user) {
                $this->addError($attribute, '用户名或密码错误.');
            }
        }
        // 9
    }

    // 7 
    public function getUser()
    {
        if ($this->_user === false) {
            // 8
            $this->_user = User::find()->where(['username'=>$this->username,'password'=>md5($this->password)])->one();
        }
        return $this->_user;
    }
}
