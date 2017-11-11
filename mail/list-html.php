<div class="table-responsive">
	<h2>Нова заявка</h2>
	<h4>IP - <?=$ip;?></h4>
	<table style="width: 100%; border: 1px solid #ddd; border-collapse: collapse;">
        <tr style="border: 1px solid #ddd;">
        	<td style="background: #f9f9f9;border: 1px solid #ddd;">Прізвище, ім\'я, по-батькові</td>
        	<td><?=$form->pib;?></td>
        </tr>
        <tr style="border: 1px solid #ddd;">
        	<td style="background: #f9f9f9;border: 1px solid #ddd;">Дата та місце народження</td>
        	<td><?=$form->date;?></td>
        </tr>
        <tr style="border: 1px solid #ddd;">
        	<td style="background: #f9f9f9;border: 1px solid #ddd;"">Місце прописки та місце фактичного проживання</td>
        	<td><?=$form->address;?></td>
        </tr>
        <tr style="border: 1px solid #ddd;">
        	<td style="background: #f9f9f9;border: 1px solid #ddd;">Наявність власного житла</td>
        	<td><?=$form->house;?></td>
        </tr>
        <tr style="border: 1px solid #ddd;">
        	<td style="background: #f9f9f9;border: 1px solid #ddd;">Місце роботи (займана посада)</td>
        	<td><?=$form->work;?></td>
        </tr>
        <tr style="border: 1px solid #ddd;">
        	<td style="background: #f9f9f9;border: 1px solid #ddd;">E-mail</td>
        	<td><? isset($form->email) ? $form->email : 'Не вказано';?></td>
        </tr>
        <tr style="border: 1px solid #ddd;">
        	<td style="background: #f9f9f9;border: 1px solid #ddd;">Контактний телефон</td>
        	<td><?=$form->phone;?></td>
        </tr>
        <tr style="border: 1px solid #ddd;">
        	<td style="background: #f9f9f9;border: 1px solid #ddd;">Проходження служби (в/ч та час) в АТО</td>
        	<td><?=$form->army;?></td>
        </tr>
        <tr style="border: 1px solid #ddd;">
        	<td style="background: #f9f9f9;border: 1px solid #ddd;">Поранення, інвалідність, діагноз</td>
        	<td><?=$form->medic;?></td>
        </tr>
        <tr style="border: 1px solid #ddd;">
        	<td style="background: #f9f9f9;border: 1px solid #ddd;">Нагороди</td>
        	<td><?=$form->nagor;?></td>
        </tr>
        <tr style="border: 1px solid #ddd;">
        	<td style="background: #f9f9f9;border: 1px solid #ddd;">Номер значка та посвідчення</td>
        	<td><?=$form->number;?></td>
        </tr>
    </table>
</div>