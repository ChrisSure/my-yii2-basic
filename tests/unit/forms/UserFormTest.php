<?php

namespace forms;

use app\logic\form\auth\UserForm;


class UserFormTest extends \Codeception\Test\Unit
{
	
    public function testSuccess()
    {
        $model = new UserForm();

        $model->attributes = [
            'username' => 'Tester',
            'email' => 'tester@gmail.com',
            'password' => 'Tester text',
            'role' => 'user',
            'status' => 1,
            
        ];

        expect_that($model->validate(['username', 'email', 'password', 'role', 'status']));
    }
    
}