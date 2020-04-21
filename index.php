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
    <title>PHP</title>
</head>
<body>
    <h1>Mes utilisateurs</h1>
    <table>
        <?php foreach ($arr as $user) {
            echo "<tr>";
            echo "<td class='column'>{$user['name']}</td>";
            echo "<td class='column'>{$user['age']}</td>";
            echo "<td class='column'>{$user['passion']}</td>";
            echo "</tr>";
        } ?>
    </table>
    <table>
        <?php foreach ($arr as $user): ?>
            <tr>
                <td class="column"><?= $user['name'] ?></td>
                <td class="column"><?= $user['age'] ?></td>
                <td class="column"><?= $user['passion'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>