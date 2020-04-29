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
        <?php if (isset($_SESSION['twice'])): ?>
            <div>
                <p class="wrong-login">Mauvais login ou mot de passe</p>
            </div>
        <?php endif ?>

        <form action="controllers/connection.php" method="POST">
            <div>
                <label for="name">Prénom :</label>
                <input type="text" name="name" value="<?= isset($_SESSION['twice']) ? $_SESSION['twice'] : '' ?>">
            </div>
            <div>
                <label for="password">Mot de passe : </label>
                <input type="password" name="password"> 
            </div>
            <input type="submit" value="Connection!">
        </form>
    </main>
    <?php require 'templates/footer.php' ?>
    <?php session_destroy() ?>
</body>
</html>