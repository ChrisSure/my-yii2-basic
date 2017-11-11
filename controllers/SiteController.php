<?php

namespace app\controllers;

use yii\web\Controller;
use app\logic\repositories\system\SettingRepository;
use app\logic\components\Meta;


class SiteController extends Controller
{
	
	public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
	
    
    public function actionIndex()
    {
    	$setting = (new SettingRepository())->get(1);
    	$meta = Meta::create($setting->title, $setting->description, $setting->keywords);
        return $this->render('index', ['meta' => $meta]);
    }
    
    


}
