<?php

namespace forms;

use app\logic\form\auth\UserUpdateForm;
use app\logic\entities\auth\User;


class UserUpdateFormTest extends \Codeception\Test\Unit
{
	
    public function testSuccess()
    {
    	$user = User::findOne(1);
        $model = new UserUpdateForm($user, 'user');

        $model->attributes = [
            'username' => 'Tester',
            'email' => 'tester@gmail.com',
            'role' => 'user',
            'status' => 1,
        ];

        expect_that($model->validate(['username', 'email', 'role', 'status']));
    }
    
}