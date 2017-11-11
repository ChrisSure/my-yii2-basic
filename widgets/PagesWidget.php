<?php
namespace app\widgets;

use yii\base\Widget;
use app\logic\entities\blog\Pages;



class PagesWidget extends Widget
{
	
	public function run()
	{
		$pages = Pages::find()->where(['status' => 1])->all();
		return $this->render('pages', ['pages' => $pages]);
	}
	
}
?>