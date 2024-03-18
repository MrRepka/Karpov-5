<?php

    session_start();
    require_once 'connect.php';
// получение данных из формы регистрации
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
// проверка на пустые поля
if (!isset($email) || !isset($password) || !isset($password_confirm))

    {
        $_SESSION['message'] = 'Пустые поля';
    } 

else {
// проверка на совпадение паролей
    if ($password === $password_confirm) {

        $path = 'uploads/' . time() . $_FILES['name'];
        if (!move_uploaded_file($_FILES['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../register.php');
        }

        $password = md5($password);
// запрос на добавление данных
        mysqli_query($connect, "INSERT INTO `user` (`id`, `email`, `password`) VALUES (NULL, '$email' , '$password')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../logining.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }
}

?>
