<?php
namespace app\modules\admin;

use Yii;
use yii\filters\AccessControl;
use app\modules\admin\services\SecurityBehavior;


/**
 * vil module definition class
 */
class Modules extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';
    public $layout = 'main';
    
	
	
	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
	
	
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        Yii::configure($this, require __DIR__ . '/config.php');
    }
}
