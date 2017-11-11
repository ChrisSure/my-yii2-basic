<?php

namespace forms;

use app\logic\form\system\SecurityForm;



class SecurityFormTest extends \Codeception\Test\Unit
{
	
    public function testSuccess()
    {
        $model = new SecurityForm();

        $model->attributes = [
            'ip' => '23456'
        ];

        expect_that($model->validate(['ip']));
    }
    
}