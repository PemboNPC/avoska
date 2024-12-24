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

// Обновление статуса заказа
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_status'])) {
    $orderId = $_POST['order_id'];
    $newStatus = $_POST['status'];

    $updateSql = "UPDATE orders SET status = '$newStatus' WHERE id = $orderId";
    if ($conn->query($updateSql) === TRUE) {
        echo "Статус заказа обновлён!";
    } else {
        echo "Ошибка обновления: " . $conn->error;
    }
}

// Получение всех заказов
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Управление заказами</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Управление заказами</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Товар</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Количество</th>
                <th>Адрес</th>
                <th>Статус</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['product']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['quantity']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['status']}</td>
                        <td>
                            <form method='POST'>
                                <input type='hidden' name='order_id' value='{$row['id']}'>
                                <select name='status'>
                                    <option value='новое'" . ($row['status'] == 'новое' ? ' selected' : '') . ">новое</option>
                                    <option value='подтверждено'" . ($row['status'] == 'подтверждено' ? ' selected' : '') . ">подтверждено</option>
                                    <option value='отменено'" . ($row['status'] == 'отменено' ? ' selected' : '') . ">отменено</option>
                                </select>
                                <button type='submit' name='update_status'>Обновить</button>
                            </form>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Заказов нет</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
<?php
$conn->close();
?>
