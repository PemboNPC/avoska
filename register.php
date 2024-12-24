<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fio = $_POST['fio'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $stmt = $pdo->prepare("INSERT INTO users (fio, username, password, email, phone) VALUES (?, ?, ?, ?, ?)");
    try {
        $stmt->execute([$fio, $username, $password, $email, $phone]);
        echo "Регистрация прошла успешно!";
    } catch (PDOException $e) {
        echo "Ошибка: " . $e->getMessage();
    }
}
?>