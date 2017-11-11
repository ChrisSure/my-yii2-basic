<?php

namespace forms;

use app\logic\form\system\SettingForm;



class SettingFromTest extends \Codeception\Test\Unit
{
	
    public function testSuccess()
    {
        $model = new SettingForm();

        $model->attributes = [
            'title' => 'Tester title',
            'description' => 'Tester description',
            'keywords' => 'Tester keywords',
            'address' => 'Tester address',
            'phone' => '0987466672',
            'email' => 'test@gmail.com',
            
        ];

        expect_that($model->validate(['title', 'description', 'keywords', 'address', 'phone', 'email']));
    }
    
}