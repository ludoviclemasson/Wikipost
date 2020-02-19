<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- on charge d'abord bootstrap, puis notre css à nous -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">

    <title>Wikipost</title>
</head>
<body>
    <div class="container">
<header class="d-flex align-items-baseline mb-3 justify-content-between">
    <div class="d-flex  align-items-baseline">
        <h1 class="mr-3"><a href="index.php">Wikipost</a></h1>
        <nav class="nav">
            <a href="index.php" class="nav-link">Accueil</a>
            <a href="index.php?page=cgu" class="nav-link">CGU</a>
            <a href="index.php?page=creation-article" class="nav-link">Créer un article</a>
            <a href="index.php?page=Mon profil" class="nav-link">Mon profil</a>
        </nav>
    </div>

    <nav class="d-flex align-items-baseline">
        <?php
        //si l'utilisateur n'est pas connecté... 
        if (empty($_SESSION['user'])){
        ?>
        <a href="index.php?page=inscription" class="nav-link">Inscription</a>
        <a href="index.php?page=connexion" class="nav-link">Connexion</a>
        <?php 
        } else { 
        //sinon, s'il est connecté
        ?>
        <a href="index.php?page=deconnexion" class="nav-link">Déconnexion</a>
        <div><?= $_SESSION['user']['username'] ?></div>
        <?php } ?>
    </nav>
</header>
        <main>