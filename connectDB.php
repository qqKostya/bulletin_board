<?php
// Подключение к базе данных
$servername = "localhost";
$username = "ваше_имя_пользователя";
$password = "ваш_пароль";
$dbname = "bulletin_board";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
