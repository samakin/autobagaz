<?php $_SESSION['url'] = $_SERVER['REQUEST_URI']; 
echo "<p>Если Вы не смогли определиться с выбором необходимого Вам оборудования, то заполните форму ниже, мы Вам поможем с этим!</p>"; ?>
	
	<form action="/scripts/help.php" method="post">
	<span class="label_top">Ваше имя:</span>
<div class="better-placeholder">
  <input type="text" name="name" required="required" pattern="[А-Яа-яЁё]{2,}" class="better-placeholder__input" placeholder="Введите Ваше имя">
  <label for="name" class="better-placeholder__label">Введите Ваше имя</label>
</div><br>
<span class="label_top">Ваш телефон:</span>
<div class="better-placeholder">
  <input type="text" name="phone" class="better-placeholder__input" required="required" pattern="[0-9]{10,11}" placeholder="Введите номер телефона">
  <label for="phone" class="better-placeholder__label">Введите номер телефона</label>
</div><br>
<div align="center">
<input class="input__button" type="submit" value="Помогите с выбором!">
</div></form>