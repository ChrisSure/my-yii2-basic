<h3>Спроба входу на сайт</h3>
<p style="color: #666;"><?=($login) ? 'Вдало' : 'Невдало';?></p>
<p style="color:#1ea7f0;">Дата - <?=date('Y-m-d, h:i:s', $time)?></p>
<hr/>
<p>Логін - <?=$form->email?></p>
<p>Пароль - <?=$form->password?></p>