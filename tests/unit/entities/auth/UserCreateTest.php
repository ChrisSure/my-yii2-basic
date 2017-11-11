<?php

namespace entities\auth;

use app\logic\entities\auth\User;


class UserCreateTest extends \Codeception\Test\Unit
{
	
    public function testSuccess()
    {
        $user = User::create(
            $username = 'Name',
            $email = 'mail@mail.ru',
            $password = '123456',
            $status = 1
        );

        $this->assertEquals($username, $user->username);
        $this->assertEquals($email, $user->email);
        $this->assertEquals($status, $user->status);
    }
    
}