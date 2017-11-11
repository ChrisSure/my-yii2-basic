<?php
namespace app\logic\repositories\blog;

use app\logic\entities\blog\Pages;


class PagesRepository
{
	
	public function get($id): Pages
    {
        if (!$page = Pages::findOne($id)) {
            throw new \RuntimeException('Error with select one page.');
        }
        return $page;
    }
    
    public function all(): array
    {
		if (!$pages = Pages::find()->orderBy('sort', 'desc')->all()) {
			throw new \RuntimeException('Error with select all page.');
		}
		return $pages;
	}
	
	public function getWith($with, $value)
	{
		return Pages::find()->where([$with => $value])->one();
	}
    

    public function save(Pages $page): void
    {
        if (!$page->save()) {
            throw new \RuntimeException('Saving error.');
        }
    }

    public function remove(Pages $page): void
    {
        if (!$page->delete()) {
            throw new \RuntimeException('Removing error.');
        }
    }
	
	
	/**
	* Метод повертає максимальне число сортування
	* 
	* @return int
	*/
	public function lastSort()
	{
		$res = Pages::find()->max('sort');
		return isset($res) ? $res + 1 : 1;
	}
	
	
	/**
	* Метод перебирає номери сортування і зменшує їх на 1
	* @param int $sort
	* 
	* @return void
	*/
	public function updateAllSort($sort)
	{
		Pages::updateAllCounters(['sort' => -1], ['>=', 'sort', $sort]);
	}
	
	
}
?>