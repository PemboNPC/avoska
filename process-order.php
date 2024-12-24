<?php

$servername = "MySQL-5.7"; 
$username = "root"; 
$password = ""; 
$dbname = "avoska"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение данных из формы
$product = $_POST['product'];
$name = $_POST['name'];
$email = $_POST['email'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];

// SQL-запрос на вставку данных
$sql = "INSERT INTO orders (product, name, email, quantity, address, status) 
        VALUES ('$product', '$name', '$email', '$quantity', '$address', 'новое')";

if ($conn->query($sql) === TRUE) {
    echo "Заказ успешно создан!";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>