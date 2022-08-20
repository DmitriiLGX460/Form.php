<?php
include_once 'User.php';
include_once 'form.php';

if (isset($_POST) && count( value: $_POST > 0)) {
    $name = $_POST['name'];
    echo "Введённое имя пользователя" . $name . "<br>";
    $email = $_POST['email'];
    echo "Введённая эл. почта" . $email . "<br>";
    $password = $_POST['password'];
    echo "Введённый пароль" . md5 ($password) . "<br>";
}
