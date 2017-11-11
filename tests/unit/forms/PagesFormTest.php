<?php

namespace forms;

use app\logic\form\blog\PagesForm;



class PagesFormTest extends \Codeception\Test\Unit
{
	
    public function testSuccess()
    {
        $model = new PagesForm();

        $model->attributes = [
            'name' => 'Tester',
            'slug' => 'tester',
            'text' => 'Tester text',
            'title' => 'Tester title',
            'description' => 'Tester description',
            'keywords' => 'Tester keywords',
            'status' => 1,
            
        ];

        expect_that($model->validate(['name', 'slug', 'text', 'title', 'description', 'keywords', 'status']));
    }
    
}