<?php
session_start();
include($_SERVER["DOCUMENT_ROOT"] . "/backend/blocks/metatagslight.php");
echo "<title>Войти</title>";

$dbname = "9082410193_zakaz";
include($_SERVER["DOCUMENT_ROOT"] . "/backend/connectdb.php");

if ((isset($_POST['login']) && $_POST['login'] != '') && (isset($_POST['password']) && $_POST['password'] != '')) {
  $login = $_POST['login'];
  $password = $_POST['password'];
  echo $password;

  $login = htmlspecialchars($login);
  $password = htmlspecialchars($password);

  $login = urldecode($login);
  $password = urldecode($password);

  $login = trim($login);
  $password = trim($password);

  $login = $_REQUEST['login'];
  $password = $_REQUEST['password'];

  $password = md5($password);
  echo $password;

  $querylogin = "SELECT user_login FROM users WHERE user_login='" . $login . "'";
  $res = mysqli_query($connect, $querylogin);
  $numrows = mysqli_num_rows($res);

  if ($numrows != 0) {

    while ($row = mysqli_fetch_assoc($res)) {
      $dblogin = $row['user_login'];
      $dbpassword = $row['user_hash'];
    }

    if ($login = $dblogin) {
      if ($password = $dbpassword) {
        function generateRandomString($length = 32)
        {
          $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
          $charactersLength = strlen($characters);
          $randomString = '';
          for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
          }
          return $randomString;
        }

        $randomUserString = generateRandomString();
        $queryString = "UPDATE users SET user_string='$randomUserString' WHERE user_login='$login'";
        $resString = mysqli_query($connect, $queryString);

        $cookieName = "userString";
        $cookieValue = $randomUserString;
        setcookie($cookieName, $cookieValue, time() + (21600), "/"); //6h

        $_SESSION['session_username'] = $login;
        //header('Refresh: 1; Url=intro');
      } else {
        $message = "Введенный пароль неверный!";
      }
    }
  } else {
    $message = "Такого пользователя не существует";
  }
} ?>

<div class="auth__wrapper">
  <div class="auth__content">
    <h2 class="title title-h2 auth__title">Войти</h2>
    <div class="auth__form-wrap">
      <form method="post" class="form auth__form">
        <span class="form__label">Введите логин:</span>
        <div class="form__input-wrap">
          <input type="text" name="login" required autofocus maxlength="30" class="form__input auth__input"
                 placeholder="Введите логин">
          <label for="login" class="form__label--shown">Введите логин</label>
        </div>
        <span class="form__label">Введите пароль:</span>
        <div class="form__input-wrap">
          <input type="password" name="password" required maxlength="30" class="form__input auth__input"
                 placeholder="Введите пароль">
          <label for="password" class="form__label--shown">Введите пароль</label>
        </div>
        <button class="button button__zakaz auth__input">Войти</button>
        <p class="text auth__license">Нет аккаунта? <a class="link auth__license" href="/registration">Зарегистрироваться</a>
        </p>
      </form>
    </div>
  </div>
  <?php
  if (!empty($message)) {
    echo "<p class='good-message good-message--wrong auth__error'>" . $message . "</p>";
  } ?>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/backend/blocks/counters.html"); ?>
