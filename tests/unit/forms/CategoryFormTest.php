<?php

namespace forms;

use app\logic\form\blog\CategoryForm;



class CategoryFormTest extends \Codeception\Test\Unit
{
    public function testSuccess()
    {
        $model = new CategoryForm();

        $model->attributes = [
            'name' => 'Tester',
            'slug' => 'tester',
            'title' => 'Tester title',
            'description' => 'Tester description',
            'keywords' => 'Tester keywords',
            'parent_id' => 1,
            
        ];

        expect_that($model->validate(['name', 'slug', 'title', 'description', 'keywords', 'status']));
    }
    
}