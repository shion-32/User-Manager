<?php

require_once __DIR__ . '/connect.php';

// Create
if (isset($_POST['add'])) {
    $name  = $_POST['name']  ?? '';
    $email = $_POST['email'] ?? '';

    $sql = "INSERT INTO users (user_name, user_email) VALUES (?, ?)";
    $query = $pdo->prepare($sql);
    $query->execute([$name, $email]);

    header("Location: index.php");
    exit;
}

//Read
$sql = $pdo->prepare("SELECT * FROM users WHERE flag=0");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_OBJ);

//Update
if(isset($_POST['edit'])) {
    $name  = $_POST['name']  ?? '';
    $email = $_POST['email'] ?? '';
    $id  = $_GET['id']  ?? '';
    $sql = ("UPDATE users SET user_name=?, user_email=? WHERE user_id=?");
    $query = $pdo->prepare($sql);
    $query->execute([$name, $email, $id]);

    header("Location: index.php");
    exit;
}

//Delete
if(isset($_POST['delete'])) {
    $id  = $_GET['id']  ?? '';
    $sql = ("UPDATE users SET flag=1 WHERE user_id=?");
    $query = $pdo->prepare($sql);
    $query->execute([$id]);

    header("Location: index.php");
    exit;
}
