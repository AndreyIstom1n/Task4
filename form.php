<link rel="stylesheet" href="style.css" type="text/css"/>
<style>
/* Сообщения об ошибках и поля с ошибками выводим с красным бордюром. */
.error {
border: 2px solid red;
margin-top: 10%;
}
</style>
<form action="" method="POST">
<?php
if (!empty($messages)) {
print('<div id="messages">');
// Выводим все сообщения.
foreach ($messages as $message) {
print($message);
}
print('</div>');
}
?>
  <p><input type="text" name="fio" placeholder="Ваше имя"></p>
  <input name="fio" <?php if ($errors['fio']) {print 'class="error"';} ?> value="<?php print $values['fio']; ?>"/></div>
  <p><input type="email" name="email" placeholder="Ваша почта"></p>
  <input name="email" <?php if ($errors['email']) {print 'class="error"';} ?> value="<?php print $values['email']; ?>"/></div>
  <br>
  <h2>Ваш год рождения</h2>
  <select name="year" <?php if ($errors['year']) {print 'class="error"';} ?> value="<?php print $values['year']; ?>">
  <select name="year">
    <?php 
    for ($i = 1900; $i <= 2023; $i++) {
      printf('<option value="%d">%d Год</option>', $i, $i);
    }
    ?>
  </select>
  <br>
  <br>
  <h2>Ваш пол</h2>
  <p><input type="radio" name="r1[]" value="male"> Мужской</p>
  <p><input type="radio" name="r1[]" value="female"> Женский</p>
  <p><input type="radio" name="r1[]" value="other">Другой</p>

  <br> 
  <h2>Количество ваших конечностей</h2>
  <p><input type="radio" name="r2[]" value="2">2</p>
  <p><input type="radio" name="r2[]" value="3">3</p>
  <p><input type="radio" name="r2[]" value="4">4</p>
  <p><input type="radio" name="r2[]" value="many">4+</p>
  <br> 
  <h2>Ваши сверхспособности</h2>
  <p><select multiple="multiple" name="abilities[]">
    <option value="Immortality">Бессмертие</option>
    <option value="Passing through walls">Прохождение сквозь стены</option>
    <option value="Levitation">Левитация</option>
    </select>
  </p>
  <br>
  <h2>Ваша биография</h2>
  <textarea name="biography" <?php if ($errors['biography']) {print 'class="error"';} ?> value="<?php print $values['biography']; ?>"></textarea>
  <br>
  <h2>С контрактом ознакомлен(а)</h2>
  <p><input type="checkbox" name="cb"></p>
  <input type="submit" value="Подтверждаю" />
</form>