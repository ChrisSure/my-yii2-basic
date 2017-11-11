<?php

namespace app\logic\repositories\blog;

use app\logic\entities\blog\Category;


class CategoryRepository
{

    public function get($id): Category
    {
        if (!$category = Category::findOne($id)) {
            throw new \RuntimeException('Category is not found.');
        }
        return $category;
    }
    
    
    public function getWith($with, $value)
	{
		return Category::find()->where([$with => $value])->one();
	}
    
    
    public function save(Category $category): void
    {
        if (!$category->save()) {
            throw new \RuntimeException('Saving error.');
        }
    }

    public function remove(Category $category): void
    {
        if (!$category->delete()) {
            throw new \RuntimeException('Removing error.');
        }
    }
    
    
    public function all()
    {
		if (!$category = Category::find()->andWhere(['>', 'depth', 0])->orderBy(['lft' => SORT_ASC])->all()) {
			throw new \RuntimeException('Category all error.');
		}
		return $category;
	}
    
}