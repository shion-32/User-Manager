<?php
$host = '127.0.0.1:3306';
$db = 'users_data';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

} catch (PDOException $e) {
    echo 'Ошибка соединения с БД' . $e->getMessage();
}
