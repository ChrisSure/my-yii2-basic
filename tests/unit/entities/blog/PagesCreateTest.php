<?php

namespace entities\blog;

use app\logic\entities\blog\Pages;



class PagesCreateTest extends \Codeception\Test\Unit
{
	
    public function testSuccess()
    {
        $pages = Pages::create(
            $name = 'Name',
            $slug = 'slug',
            $text = 'Texting',
            $title = 'Full header',
            $description = 'Description',
            $keywords = 'Keywords',
            $status = 1
        );

        $this->assertEquals($name, $pages->name);
        $this->assertEquals($slug, $pages->slug);
        $this->assertEquals($text, $pages->text);
        $this->assertEquals($title, $pages->title);
        $this->assertEquals($description, $pages->description);
        $this->assertEquals($keywords, $pages->keywords);
        $this->assertEquals($status, $pages->status);
    }
    
}