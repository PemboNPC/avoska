<?php
include 'db.php';

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Подготовленный запрос для проверки логина и пароля
    $stmt = $pdo->prepare("SELECT * FROM admin WHERE username = ? AND password = MD5(?)");
    $stmt->execute([$username, $password]);
    $admin = $stmt->fetch();

    if ($admin) {
        // Если авторизация успешна
        $_SESSION['admin'] = true;

        // Перенаправление на admin-orders.php
        header("Location: admin-orders.php");
        exit;
    } else {
        // Если логин или пароль неверны
        echo "Неверный логин или пароль.";
    }
}
?>
