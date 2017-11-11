<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\widgets\PagesWidget;
use app\widgets\CategoryWidget;

AppAsset::register($this);
sersid\fontawesome\Asset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?=Html::encode($this->title);?></title>
    <?=$meta;?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container">

	<div class="row">
		<div class="col-md-12 header">
			<h1><a href="<?=Url::home();?>"><span>My-</span>Yii2-basic</a></h1>
			<h4 style="margin-top: 10px;right:0; top:0; position: absolute; font-size: 12px;"><a href="<?=Url::to(['/admin'])?>" style="color: #3d83c2;">Admin-панель</a></h4>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12 nav">
			<?=PagesWidget::widget();?>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<?=CategoryWidget::widget();?>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12 content">
			<?= Breadcrumbs::widget([
            	'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        	]) ?>
        	<?= $content ?>
		</div>
	</div> 
    
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
