<?php

namespace app\controllers\blog;

use yii\web\Controller;
use app\logic\repositories\blog\CategoryRepository;
use app\logic\entities\system\Logs;
use app\logic\components\Meta;



class CategoryController extends Controller
{
    public $category;
    
    public function __construct($id, $module, CategoryRepository $category, $config = [])   
    {
        parent::__construct($id, $module, $config);
        $this->category = $category;
    }
	
    
    public function actionView($slug)
    {
        if (!$category = $this->category->getWith('slug', $slug)) {
			Logs::add('Спроба звернутись до неіснуючої категорії', __FILE__, 2); //Add log
        	throw new \yii\web\HttpException(404, 'Немає даної категорії');
		}
        $meta = Meta::create($category->title, $category->description, $category->keywords);
        return $this->render('view', ['category' => $category, 'meta' => $meta]);
    }


}
