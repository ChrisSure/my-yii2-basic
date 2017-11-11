<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">
	
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger" style="margin-top: 20px;">
        <?= nl2br(Html::encode($message)) ?>
    </div>
    <img src="<?=\Yii::getAlias('@img')?>/404.jpg" alt="404" style="margin-top: 20px; "/>

</div>
