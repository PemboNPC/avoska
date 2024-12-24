<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сервис Авоська</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="logo-top">АВОСЬКА</div>
        <div class="header-right">
            <a href="#" class="popular-items" id="openOrdersPopup">Страница заказов</a>
            <div class="search-bar">
                <input type="text" placeholder="Поиск товаров">
            </div>
            <div class="account">
                <img src="img/ava.png" alt="Вход в аккаунт" id="openRegisterPopup">
            </div>
        </div>
    </header>
    <main>
        <section class="mT">
            <h1 class="main-logo">АВОСЬКА</h1>
            <p class="tagline">СЕРВИС ДЛЯ ЗАКАЗА ТОВАРОВ</p>
        </section>
        <section class="catalog">
    <h2 class="catalog-title">КАТАЛОГ</h2>
    <div class="product-list">
        <div class="product">
            <img src="img/bag.png" alt="Продукт">
            <p>Продукт 1</p>
            <button class="buy-btnq" data-product="Продукт 1">КУПИТЬ</button>
        </div>
        <div class="product">
            <img src="img/bag.png" alt="Продукт">
            <p>Продукт 2</p>
            <button class="buy-btnq" data-product="Продукт 2">КУПИТЬ</button>
        </div>
        <div class="product">
            <img src="img/bag.png" alt="Продукт">
            <p>Продукт 3</p>
            <button class="buy-btnq" data-product="Продукт 3">КУПИТЬ</button>
        </div>
    </div>
</section>

<div class="popupq" id="popupq">
    <div class="popup-contentq">
        <span class="close-btnq" id="closePopupq">&times;</span>
        <h2>Купить <span id="productName"></span></h2>
        <form id="buyForm" method="POST" action="process-order.php">
            <input type="hidden" name="product" id="popupProductInputq">
            <label for="name">Ваше имя:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Ваш email:</label>
            <input type="email" id="email" name="email" required>
            <label for="quantity">Количество:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="1" required>
            <label for="address">Адрес доставки:</label>
            <textarea id="address" name="address" required></textarea>
            <button type="submit">Отправить</button>
        </form>
    </div>
</div>
    </main>
    <footer>
        <div class="footer-logo">АВОСЬКА</div>
        <div class="adminPanel" id="openAdminPopup">Панель администратора</div>
    </footer>

    <div id="adminPopup" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <h2>Авторизация администратора</h2>
            <form action="admin.php" method="post">
                <input type="text" name="username" placeholder="Логин" required>
                <input type="password" name="password" placeholder="Пароль" required>
                <button type="submit">Войти</button>
            </form>
        </div>
    </div>

    <div id="registerPopup" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <h2>Регистрация</h2>
            <form action="register.php" method="post">
                <input type="text" name="fio" placeholder="ФИО" required>
                <input type="text" name="username" placeholder="Логин" required>
                <input type="password" name="password" placeholder="Пароль" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" name="phone" placeholder="Телефон" required>
                <button type="submit">Зарегистрироваться</button>
            </form>
            <p>Уже есть аккаунт? <a href="#" id="openLoginPopup">Войти</a></p>
        </div>
    </div>

    <div id="loginPopup" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <h2>Авторизация</h2>
            <form action="login.php" method="post">
                <input type="text" name="username" placeholder="Логин" required>
                <input type="password" name="password" placeholder="Пароль" required>
                <button type="submit">Войти</button>
            </form>
            <p>Нет аккаунта? <a href="#" id="openRegisterPopupFromLogin">Зарегистрироваться</a></p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
