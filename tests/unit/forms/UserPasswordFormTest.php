<?php

namespace forms;

use app\logic\form\auth\UserPasswordForm;

class UserPasswordFormTest extends \Codeception\Test\Unit
{
	
    public function testSuccess()
    {
        $model = new UserPasswordForm();

        $model->attributes = [
            'password' => '1234',
        ];

        expect_that($model->validate(['password']));
    }
    
}