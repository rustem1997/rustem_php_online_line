<?php
    session_start();
    // header('Location: auth.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post" >
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите свое полное имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit" class="register-btn">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="auth.php">авторизируйтесь</a>!
        </p>
        <a href="./index.php" style="color:red;" >Назад</a>
        <p class="msg none">Lorem ipsum.</p>
    </form>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>