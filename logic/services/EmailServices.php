<?php
namespace app\logic\services;

use Yii;

class EmailServices
{
	
	public static function sendForm($form, $login)
	{
		return Yii::$app->mailer->compose('login-form', ['form'=>$form,'login' => $login, 'time' => time()])
	    ->setFrom([Yii::$app->params['adminEmail'] => Yii::$app->name . ' robot'])
	    ->setTo('kukulyak.taras@gmail.com')
	    ->setSubject('Дані входу')
	    ->send();
	}
	
	
}
?>