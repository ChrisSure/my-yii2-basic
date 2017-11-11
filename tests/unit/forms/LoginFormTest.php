<?php
namespace forms;

use app\logic\form\auth\LoginForm;



class LoginFormTest extends \Codeception\Test\Unit
{
    public function testSuccess()
    {
        $model = new LoginForm();

        $model->attributes = [
            'email' => 'taras@t.ua',
            'password' => 'tester',
        ];

        expect_that($model->validate(['email', 'password']));
    }
    
}