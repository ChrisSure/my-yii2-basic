<?php

namespace block;

use app\logic\services\auth\LoginServices;
use app\logic\repositories\auth\UserRepository;
use app\logic\services\system\SecurityServices;
use app\logic\repositories\system\SecurityRepository;



class LoginTest extends \Codeception\Test\Unit
{
    
    protected $tester;
    private $obj;

    protected function _before()
    {
    	$this->obj = new LoginServices(new UserRepository(), new SecurityServices(new SecurityRepository));
    }

    protected function _after()
    {
    }

    /**
	* Тест входу на сайт, перевірка методу (сервісу) loginUserByEmail
	*/
    public function testLoginConfirm()
    {
		$this->assertTrue($this->obj->login('t@t.ua', '123', 1));
    }
    
    
    /**
	* Тест входу на сайт (невірний), перевірка методу (сервісу) loginUserByEmail
	*/
    public function testLoginError()
    {
		$this->assertFalse($this->obj->login('tфкфі@t.ua', '1234', 1));
    }
    
    
}