<?php
    $con = mysqli_connect("127.0.0.1","root", "root", "my_db") or die(mysqli_error());

    if (!$con)
{
print('Connect not found!'.mysqli_error());
}

    $name = $_POST['login'];
    $pass = password_hash($_POST["psw"], PASSWORD_DEFAULT);
    $token = $_COOKIE['my.token'];

    $sql="INSERT INTO my_table (login, password, token) VALUES('$name', '$pass', '$token')";
    $result=mysqli_query($con, $sql);

    if ($result==false) {
        mysqli_close($con);
        header("Location: index.php",true,303);
        }
    else { 

        mysqli_close($con);
        header("Location: last_page.php",true,303);
    
    exit;
    }