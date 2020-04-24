<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/connection.css">
    <link href="/img/favicon.ico" rel="icon" type="image/x-icon" />
    <title>It-Gaming | Connexion</title>
</head>
<body>
    <?php require 'templates/header.php' ?>
    <main class="flex">
        <form action="controllers/connection.php" method="POST">
            <div>
                <label for="name">Prénom :</label>
                <input type="text" placeholder="Votre prénom" name="name" value="jon">
            </div>
            <div>
                <label for="password">Mot de passe : </label>
                <input type="password" name="password"> 
            </div>
            <input type="submit" value="Connection!">
        </form>
    </main>
    <?php require 'templates/footer.php' ?>
</body>
</html>