<?php
// если сессия активна, то перейти на страницу
    session_start();
    if ($_SESSION['user']) {
        header('Location: index2.html');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Форма регистрации, отправляющая данные на signup.php для проверки и добавления -->
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Зарегистрироваться</button>
        <p>
            Уже есть аккаунт? - <a href="logining.php">Авторизация</a>!
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