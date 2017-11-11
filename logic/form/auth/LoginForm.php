<?php

namespace app\logic\form\auth;

use Yii;
use yii\base\Model;


class LoginForm extends Model
{
    public $email;
    public $password;
    public $rememberMe = true;


    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            ['email', 'email'],
            ['rememberMe', 'boolean'],
        ];
    }
    
    
    public function attributeLabels()
    {
        return [
        	'email' => 'E-mail',
            'password' => 'Пароль',
            'rememberMe' => 'Запам\'ятати мене',
        ];
    }

}
