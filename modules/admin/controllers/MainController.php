<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\logic\form\auth\LoginForm;
use app\logic\services\auth\LoginServices;



class MainController extends Controller
{
	
	private $service;
	
	
    public function __construct($id, $module, LoginServices $service, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->service = $service;
    }
    
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect('/admin/main/index');
        }

        $form = new LoginForm();
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
        	if ($this->service->login($form->email, $form->password, $form->rememberMe, true)) {
				return $this->redirect('/admin/main/index');
			} else {
				Yii::$app->session->setFlash('danger', 'Ви ввели невірний логін або пароль.');
				return $this->redirect('/admin/main/login');
			}
        }
        return $this->render('login', ['model' => $form]);
    }
    
    
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect('/admin/main/login');
    }
    
    
    public function actionError()
	{
	    $exception = Yii::$app->errorHandler->exception;
	    if ($exception !== null) {
	        return $this->render('error', ['exception' => $exception]);
	    }
	}
    
}
