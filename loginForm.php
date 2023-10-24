<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Quiz">
    <title>Quiz</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="icon" href="favidev.webp">
</head>
<section class="body_form">
    <form class="form" method="POST" action="">
        <h1>Connexion</h1>
        <span class="input-span">
            <label for="pseudo" class="label">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo" autocomplete="off"></span>
        <span class="input-span">
            <label for="mdp" class="label">Mot de passe</label>
            <input type="password" name="mdp" id="password" autocomplete="off"></span>
        <input class="submit" type="submit" name="envoi" value="Connexion"></span>
        <span class="span">Vous n'avez pas de compte ? <a href="./register.php">Inscrivez vous</a></span>
        <span class="span">Mot de passe oublié ? <a href="./passwordChange.php">Changez votre mot de passe</a></span>
        <a href="index.html">Retour sur la page d'accueil</a>
    </form>
</section>