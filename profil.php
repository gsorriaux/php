<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>It-Gaming | Profile</title>
</head>
<body>
    <?php require_once 'templates/header.php' ?>
    <main>
        <form action="controllers/preferences.php" method="POST">
            <p>Afficher le texte ?</p>

            <label for="text">Oui</label>
            <input type="radio" name="text" value="1" <?= $_SESSION['text'] ? 'checked' : '' ?>>
            <label for="">Non</label>²
            <input type="radio" name="text" value="0" <?= !$_SESSION['text'] ? 'checked' : '' ?>><br>

            <p>Afficher l'image ?</p>
            <label for="image">Oui</label>
            <input type="radio" name="image" value="1" <?= $_SESSION['img'] ? 'checked' : '' ?>>
            <label for="image">Non</label>
            <input type="radio" name="image" value="0" <?= !$_SESSION['img'] ? 'checked' : '' ?>><br>

            <input type="submit" value="Envoyer!">
        </form>
    </main>
    <?php require_once 'templates/footer.php' ?>
</body>
</html>