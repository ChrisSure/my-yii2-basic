<?php
namespace tests;

use yii\helpers\Url;


class LoginCest
{
    public function _before(\FunctionalTester $I)
    {
    }

    public function _after(\FunctionalTester $I)
    {
    }
	
    /*
    * Тест перевіряє вхід (login) та вихід (logout) 
    */
    public function loginTest(\FunctionalTester $I)
    {
    	$I->amOnPage(Url::toRoute('/admin/main/login'));
    	$I->see('Sign in to start your session', 'p');
    	$I->fillField('input[name="LoginForm[email]"]', 't@t.ua');
        $I->fillField('input[name="LoginForm[password]"]', '123');
        $I->click('login-button');
		
        $I->see('Вітаємо', 'h1');
	}
	
	
	/*
    * Тест перевіряє вхід login (неправельний логін і пароль) 
    * В тестовій базі при logAttempt (поле Ip за замовчуванням null) інакше помилка
    */
    
    public function errorTest(\FunctionalTester $I)
    {
    	$I->amOnPage(Url::toRoute('/admin/main/login'));
    	$I->see('Sign in to start your session', 'p');
    	$I->fillField('input[name="LoginForm[email]"]', 'error@t.ua');
        $I->fillField('input[name="LoginForm[password]"]', '1234');
        $I->click('login-button');
		
        $I->see('Ви ввели невірний логін або пароль.');
	}
	
	
}
