<?php

session_start();

$name = strtolower($_POST['name']);
$password = $_POST['password'];

// Session
$loginUser =  'jon';
$passwordUser = '1234';

if ($name == $loginUser && $password == $passwordUser) {
    $_SESSION['name'] = $name;
    $_SESSION['img'] = 1;
    $_SESSION['text'] = 1;
    header('Location: /');
    exit;
} else { // si mauvais logs
    $_SESSION['twice'] = $name;
    header('Location: /form.php');
    exit;
}