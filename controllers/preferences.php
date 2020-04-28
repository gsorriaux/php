<?php 

session_start();

$displayImg = intval($_POST['image']);
$displayText = intval($_POST['text']);

$_SESSION['img'] = $displayImg;
$_SESSION['text'] = $displayText;

header('Location: /infos.php');