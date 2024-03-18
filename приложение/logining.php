<?php
session_start();

// если сессия активна, то перейти на страницу
if ($_SESSION['user']) {
    header('Location: index2.html');  
}

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Форма авторизации, отправляющая данные на signin.php для проверки -->
    <form action="vendor/signin.php" method="post">
        <label>Почта</label>
        <input type="text" name="email" placeholder="Введите свою почту">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <!-- Ссылка для перехода на страницу регистрации -->
        <p>
            Нет аккаунта? - <a href="register.php">Регистрация</a>
        </p>
        <?php
        // появлениее сообщения об ошибке, если что-то пошло не так
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>