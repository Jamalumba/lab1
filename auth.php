<?php
    session_start();
    $token = rand(500000, 999999);
    setcookie("my.token", $token, time() + 60);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
<title>Toucan Shoes</title>
<link rel="icon" href="toucan.png" type="image/x-icon">
<style>
    html {
        font-size: 22px
    }
    body {
        background-color: #cc99ff;
        color: #ffffff;
    }

</style>
    </head>

    <body>

        <h1><p align="center">Buy brand-new shoes here!</p></h1>

<hr>

<div align="center">


<form action="sign_in.php" method="POST">
    <input type="text" name="login" placeholder="введите имя" pattern="[a-zA-Z0-9]+" required /><br>
    <input type="password" name="psw" placeholder="введите пароль" required /><br>
    <input type="submit" value="войти"><br>
    <button formaction="index.php" formnovalidate
    >еще не зарегистрированы?</button>
</form>

    </body>

    <hr>

    <img src="img/2222.png" alt="Sneakers">

    </div>
</html>