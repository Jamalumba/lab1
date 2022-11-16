<?php
    $con = mysqli_connect("127.0.0.1","root", "root", "my_db") or die(mysqli_error());

    if (!$con)
{
print('Connect not found!'.mysqli_error());
}

    $name = $_POST['login'];
    $pass = $_POST['psw'];
    $token = $_COOKIE['my.token'];
 
    $sql = "SELECT * FROM my_table WHERE login = '$name'";

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($result);

    if (password_verify($pass, $row['password']) == true) {
        mysqli_query($con, "UPDATE my_table SET token = '$token' WHERE login = '$name'");
        header('Location: last_page.php');
    }
    else {
        $_SESSION['message'] = 'неверный пароль';
        header('Location: auth.php');
    }


    exit;
    