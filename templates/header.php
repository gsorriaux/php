<?php session_start(); ?>
<header class="flex">
    <nav>
        <ul class="flex">
            <li class="flex"><a href="/">Accueil</a></li>
            <li class="flex"><a href="users.php">Utilisateurs</a></li>
            <li class="flex"><a href="infos.php">Infos</a></li>
            <?php if (isset($_SESSION['name'])): ?>
                <li class="drop">
                    <span><?= ucfirst($_SESSION['name']) ?></span>
                    <ul class="none">
                        <li class="flex"><a href="#">Profil</a></li>
                        <li class="flex"><a href="controllers/logout.php">Déco</a></li>
                    </ul>    
                </li>
            <?php else: ?>
                <li class="flex"><a href="form.php">Connexion</a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>