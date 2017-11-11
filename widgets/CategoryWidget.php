<?php
namespace app\widgets;

use yii\base\Widget;
use app\logic\entities\blog\Category;



class CategoryWidget extends Widget
{
	
	public function run()
	{
		$nav = Category::find()->all();
		return $this->render('category', ['nav' => $nav]);
	}
	
}
?>