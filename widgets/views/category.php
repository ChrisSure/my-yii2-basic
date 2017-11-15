<?
use yii\helpers\Html;
?>

<div style="margin-top: 20px;">
	<? foreach($nav as $value): ?> 
		<? $indent = ($value->depth > 1 ? str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $value->depth - 1) . ' ' : '');?>
        <? echo $indent . Html::a(Html::encode($value->name), ['/blog/category/view', 'slug' => Html::encode($value->slug)]) . '<br/>';?>
	<? endforeach; ?>
</div>
