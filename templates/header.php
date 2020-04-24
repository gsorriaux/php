<?php session_start(); ?>
<header class="flex">
    <nav>
        <ul class="flex">
            <li class="flex"><a href="/">Accueil</a></li>
            <li class="flex"><a href="users.php">Utilisateurs</a></li>
            <?php if (isset($_SESSION['name'])): ?>
                <li class="flex"><p><?= ucfirst($_SESSION['name']) ?></p></li>
                <li class="flex"><a href="controllers/logout.php">Déco</a></li>
            <?php else: ?>
                <li class="flex"><a href="form.php">Connexion</a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>