<?php

include_once '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'boot.php';
session_start();
checkEnter();
$login = $_POST['name'];
$pass = $_POST['passw'];


if ("admin" == $login) {
    if ("admin" == $pass) {
        $_SESSION['name'] = $login;
    }
}

header('Location:index.php');

