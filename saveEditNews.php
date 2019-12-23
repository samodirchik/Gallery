<?php

include_once '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'boot.php';

$login = $_SESSION['name'];
$element[] = array(
    'content' => $_POST['content'],
    'date' => date("Y-m-d H:i:s"),
);


editNews($element);
header('Location:index.php');

