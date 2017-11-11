<?
use yii\helpers\Html;
use yii\helpers\Url;
?>
<ul>
	<? if ($pages): ?>
		<? foreach ($pages as $value): ?>
			<li><a href="<?=Url::to(['/blog/pages/view', 'slug' => $value->slug])?>"><?=$value->name?></a></li>
		<? endforeach; ?>
	<? else: ?>
		<p>Немає сторінок</p>
	<? endif; ?>
</ul>