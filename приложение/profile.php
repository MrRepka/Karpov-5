<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="auto.css">
</head>
<body>

    <!-- Профиль -->

    <form>
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout">Выход</a>
        <a href="index.php">Назад</a>
    </form>

</body>
</html>