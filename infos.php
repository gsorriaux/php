<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>It-Gaming | Infos</title>
</head>
<body>
    <?php require_once 'templates/header.php' ?>
    <?php if ($_SESSION['name']): ?>
        <main>
            <div class="">
                <?php if ($_SESSION['text']): ?>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores animi corrupti voluptas consectetur voluptatibus explicabo ex porro aspernatur impedit est dolor ducimus nam error, beatae labore vel culpa, natus saepe.</p>
                <?php endif ?>
                <?php if ($_SESSION['img']): ?>
                    <img src="/img/meat.jpg" alt="">
                <?php endif ?>
            </div>
        </main>
    <?php else: ?>
        <?php require_once 'templates/error.php' ?>
    <?php endif ?>
    <?php require_once 'templates/footer.php' ?>
</body>
</html>