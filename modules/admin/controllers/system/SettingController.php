<?php
namespace app\modules\admin\controllers\system;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\logic\entities\system\Setting;
use app\logic\form\system\SettingForm;
use app\logic\services\system\SettingServices;


class SettingController extends Controller
{
	
	private $service;
    
    public function __construct($id, $module, SettingServices $service, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->service = $service;
    }
	
	public function behaviors()
    {
    	return [
	    	'access' => [
	            'class' => AccessControl::className(),
	            'rules' => [
	            	[
		                'allow' => true,
		                'roles' => ['super_admin'],
		            ],
	            ]
	        ]
	    ];
    }
	
	
	public function actionView()
	{
		$setting = Setting::findOne(1);
		$form = new SettingForm($setting);
		if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $this->service->edit($setting->id, $form);
                Yii::$app->session->setFlash('success', 'Настройки успішно змінені');
                return $this->refresh();
            } catch (\DomainException $e) {
                Yii::$app->errorHandler->logException($e);
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }
        return $this->render('setting', ['model' => $form]);
	}
	
}

?>