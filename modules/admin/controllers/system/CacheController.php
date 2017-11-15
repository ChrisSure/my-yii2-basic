<?php
namespace app\modules\admin\controllers\system;

use Yii;
use yii\web\Controller;


class CacheController extends Controller
{
	
	public function actionView()
	{
		return $this->render('cache');
	}
	
	public function actionClear()
	{
		if (Yii::$app->cache->flush()) {
			Yii::$app->session->setFlash('success', 'Кеш очищено !');
			return $this->redirect(['/admin/system/cache']);
		}
	}
	
	
}

?>