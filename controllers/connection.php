<?php

session_start();

$name = $_POST['name'];
$password = $_POST['password'];

$_SESSION['name'] = $name;
$_SESSION['img'] = 1;
$_SESSION['text'] = 1;

header('Location: /');
