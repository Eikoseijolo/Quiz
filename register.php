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
        <h1>Inscription</h1>
        <span class="input-span">
            <label for="pseudo" class="label">Pseudo</label>
            <input type="text" name="pseudo" autocomplete="off"></span>
        <label for="email" class="label">E-mail</label>
        <input type="mail" name="email" autocomplete="off"></span>
        <label for="mdp" class="label">Mot de passe</label>
        <input type="password" name="mdp" id="password" autocomplete="off"></span>
        <input class="submit" type="submit" name="envoi" value="Inscription">
        <span class="span">Vous avez déjà un compte ? <a href="./loginForm.php">Connectez-vous</a></span>
        <a href="./index.html">Retour sur la page d'accueil</a>
    </form>
</section>