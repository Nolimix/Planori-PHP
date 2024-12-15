<!DOCTYPE html>
<?php include 'config.php'; ?>
<html>
<head>
    <title>Planori</title>
    <link rel="stylesheet" type="text/css" href="src/styles/global.css">
    <link rel="stylesheet" type="text/css" href="src/styles/index.css">
<!--    META -->
<?php //include 'components/meta.php'; ?>
</head>
<body>
<?php include 'components/header.php'; ?>
<main>
    <div class="pub"></div>
    <section class="app">
        <img src="../resources/img/logo_1024.webp" alt="Planori logo">
        <div class="presentation">
            <h1>Planori</h1>
            <span class="separator"></span>
            <div class="description">
                <p>Planori est une application web permettant de planifier vos évènements et réunions avec votre équipe.</p>
                <p>Elle a été créé par un Coach Rocket League dans le but d'aider une structure e-sport à organiser </p>
                <p>ses séances d'entrainements, de coaching ou encore ses meetings en fonction des disponibilités de chacun.</p>
            </div>
        </div>
    </section>
    <section class="feature">
        <div class="thumbnail">
            <h3>Connectée à <a href="https://discord.com/">Discord</a></h3>
            <img src="../resources/img/discord-mark-blue.svg" alt="discord logo">
        </div>
        <div class="description-in">
            <p>Avec son système de liaison à votre compte discord, votre connexion à Planori est simplfiée, sécurisée et vous êtes directement reconnu !</p>
            <p>Pas besoin de se fatiguer avec un nouveau mot de passe ou d'avoir besoin de préciser votre adresse mail. Discord nous indique quand c'est bien vous et nous fournit votre mail afin que nous puissions vous contacter en cas de pépin !</p>
            <p>En plus, vous savez exactement les informations que nous récupérons de votre compte discord lors de votre première connexion !</p>
            <p>Et pour finir sur de bonnes nouvelles, si vous ne voulez plus nous permettre d'accéder à vos informations de profil discord, vous pouvez, a tout moment, révoquer l'autorisation que vous nous aviez donné directement sur discord ! Même pas besoin de passer par chez nous pour nous !</p>
        </div>
    </section>
    <section class="feature">
        <div class="presentation">
            <h3>Customisation</h3>
            <div class="description-in">
                <p>Planori est une application web toujours en cours de développement, elle sera bientôt customisable en fonction de vos besoins. Les tranches horaires, l'affichage des disponibilités, les types d'evènements et même les notifications sont modifiables par vos soins !</p>
                <p>Toutes les idées sont bonnes pour être implémentées, si vous voulez m'en soumettre une, contactez moi : Discord : nolimix. </p>
                <p>Pour toute question ou signalement d'un problème, veuillez en référer sur le discord de la structure directement ! </p>
            </div>
        </div>
    </section>
</main>
<?php include 'components/footer.php'; ?>
</body>
</html>