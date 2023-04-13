<form action="/purchase_orders/save" method="post">
<table>
<tr><td>Тип оборудования</td><td><select name="id_type"><option>--Выберите предмет--</option>{#third}</select></td></tr>
<tr><td>Колличество</td><td><input type="number" name="count" placeholder="Введите колличество"></td></tr>
<tr><td>Описание заявки</td><td><input type="text" name="description" placeholder="Введите описание заявки"></td></tr>
<tr><td>Номер аудитории</td><td><input type="text" name="id_room" placeholder="Введите номер аудитории"></td></tr>
<tr><td>Если готово нажмите</td><td><input type="submit" placeholder="Отправить"></td></tr>
</table>
</form>