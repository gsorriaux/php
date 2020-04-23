<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulaire</title>
</head>
<body>
    <?php require 'templates/header.php' ?>
    <main>
        <form action="controllers/connection.php" method="POST">
            <div>
                <label for="name">Prénom :</label>
                <input type="text" placeholder="Votre prénom" name="name">
            </div>
            <div>
                <label for="password">Mot de passe : </label>
                <input type="password" name="password"> 
            </div>
            <input type="submit" value="Connection!">
        </form>
    </main>
</body>
</html>