<?php

namespace app\controllers\blog;

use yii\web\Controller;
use app\logic\repositories\blog\PagesRepository;
use app\logic\entities\system\Logs;
use app\logic\components\Meta;



class PagesController extends Controller
{
    public $pages;
    
    public function __construct($id, $module, PagesRepository $pages, $config = [])   
    {
        parent::__construct($id, $module, $config);
        $this->pages = $pages;
    }
	
    
    public function actionView($slug)
    {
        if (!$page = $this->pages->getWith('slug', $slug)) {
			Logs::add('Спроба звернутись до неіснуючої сторінки', __FILE__, 2); //Add log
        	throw new \yii\web\HttpException(404, 'Немає даної сторінки');
		}
        $meta = Meta::create($page->title, $page->description, $page->keywords);
        return $this->render('view', ['page' => $page, 'meta' => $meta]);
    }


}
