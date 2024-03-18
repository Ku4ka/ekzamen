<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>register</title>
  
</head>
<body>
<?php
    
    require('bd.kuchumov.php');

    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);

        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Вы успешно зарегистрировались.</h3><br/>
                  <p class='link'><a href='index.php'> Авторизация</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Обязательные поля отсутствуют.</h3><br/>
                  <p class='link'><a href='registration.php'> Регистарция</a> .</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Регистрация</h1>
        <input type="text" class="login-input" name="username" placeholder="Фамилия" required /> <br>
        <input type="text" class="login-input" name="email" placeholder="E-mail"> <br>
        <input type="password" class="login-input" name="password" placeholder="Пароль"> <br>
        <input type="submit" name="submit" value="Регистрация" class="login-button">
        <p class="link"><a href="index.php">Авторизация.</a></p>
    </form>
<?php
    }
?>
</body>
</html>