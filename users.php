<?php

/*
Je veux que vous affichiez les informations de $arr dans un tableau.
Vous vous débrouillez comme vous voulez!

1ère amélioration : un peu d'esthérique, du nom css!
2ème amélioration : et si je rajoute un ligne dans mon tableau, comment ça se passe?
2ème amélioration bis : parce que si mon tableau à 3000 lignes, je dois tout écrire?
3ème amélioration : du php dans de l'html, ou de l'html dans du php?

*/

$arr = [
    [
        'name' => 'Paul', 
        'age' => 45, 
        'passion' => 'Aime le bleu'
    ],
    [
        'name' => 'Georgette', 
        'age' => 86, 
        'passion' => 'Les sports extrêmes'
    ],
    [
        'name' => 'Martin', 
        'age' => 23, 
        'passion' => 'Les myztères'
    ],
    [
        'name' => 'Lucienne', 
        'age' => 30, 
        'passion' => 'Reine des enfers'
    ],
    [
        'name' => 'Franck', 
        'age' => 16, 
        'passion' => 'Pétrifié dans une forêt'
    ]
];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/users.css">
    <link href="/img/favicon.ico" rel="icon" type="image/x-icon" />
    <title>It-Gaming | Personnages</title>
</head>
<body>
    <?php require 'templates/header.php' ?>
    <main class="flex">
        <h1>Mes personnages</h1>   
        <div class="character flex">
            <div class="flex">
                <p class="character-description">The True Hero</p>
            </div>
            <div class="flex">
                <p class="character-name">Zack</p>
            </div>
            <div class="flex">
                <img class="character-img" src="/img/zack2.jpeg" alt="">
            </div>
        </div>
        <div class="character flex">
            <div class="flex">
                <p class="character-description">Le meilleur de deux peuples</p>
            </div>
            <div class="flex">
                <p class="character-name">Terra</p>
            </div>
            <div class="flex">
                <img class="character-img" src="/img/terra.png" alt="">
            </div>
        </div>   
        <div class="character flex">
            <div class="flex">
                <p class="character-description">Vaillante Générale</p>
            </div>
            <div class="flex">
                <p class="character-name">Beatrix</p>
            </div>
            <div class="flex">
                <img class="character-img" src="/img/beat.jpeg" alt="">
            </div>
        </div>
    </main>
    <?php require 'templates/footer.php' ?>
    
       

        <!-- <table>
        <?php foreach ($arr as $user): ?>
            <tr>
                <td class="column"><?= $user['name'] ?></td>
                <td class="column"><?= $user['age'] ?></td>
                <td class="column"><?= $user['passion'] ?></td>
            </tr>
        <?php endforeach ?>
    </table> -->
</body>
</html>