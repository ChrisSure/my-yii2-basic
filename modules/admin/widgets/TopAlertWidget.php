<?php

namespace app\modules\admin\widgets;

use yii\base\Widget;



class TopAlertWidget extends Widget
{
	
	public function run()
	{
		return $this->render('top-alert');
	}
	
}
?>