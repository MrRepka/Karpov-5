<?php

    session_start();
    require_once 'connect.php';
// получение данных из формы авторизации
    $email = $_POST['email'];
    $password = md5($_POST['password']);
// запрос для проверки на сущетсвование данных в бд
    $check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {
        header('Location: ../index2.html');

    } 
    else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../logining.php');
    }
    ?>

