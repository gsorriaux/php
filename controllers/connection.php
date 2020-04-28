<?php

session_start();

// Traite les informations du formulaire grave à $_POST
$name = $_POST['name'];
$password = $_POST['password'];

$_SESSION['name'] = $name;
$_SESSION['img'] = 1;
$_SESSION['text'] = 1;


header('Location: /');


// Connection à votre session

// Renvoi à la page d'accueil



// Vérifie que ce sont les bons login/mdp
//var_dump($_SESSION);