<?php
$servername = "localhost";
$username = "fnafgame33";
$password = "Fnafgame33";
$dbname = "fnafgame33";
    $connect = mysqli_connect($servername, $username, $password, $dbname);

    if (!$connect) {
        die('Error connect to DataBase');
    }