<?php
?>
<!DOCTYPE HTML>
<html lang="fr"
    <head>
    <meta charset="UTF-8" >
        <title>Page de contacte</title>
        <link href="contact.css" media="all" rel="stylesheet" type="text/css" />
        <!-- NAVBAR RESPONSIVE & FOOTER-->
        <link rel="stylesheet" media="screen and (min-width: 1025px)" href="navbar_footer_CSS/header.css">
        <link rel="stylesheet" media="screen and (max-width: 1024px)" href="navbar_footer_CSS/burgerMenu.css">
        <link rel="stylesheet" href="navbar_footer_CSS/footer.css">
    </head>
    <body>
    <header>
        <?php include('header.php'); ?>
    </header>

        <div class="paragraphe">
            <p>Merci d'avoir pris le temps de lire mon curriculum vitae. Pour me contacter, je vous invite à m'envoyer
                un message en remplissant le formulaire.</p>
            <p>Je souhaite surtout devenir entraineur de l'équipe de France !</p>
        </div>

        <form action="/ma-page-de-traitement" method="post">
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="user_name">
            </div>
            <div>
                <label for="mail">e-mail :</label>
                <input type="email" id="mail" name="user_mail">
            </div>
            <div>
                <label for="subject">Sujet :</label>
                <input type="text" id="subject" name="user_subject">
            </div>
            <div>
                <label for="msg">Message :</label>
                <textarea id="msg" name="user_message"></textarea>
            </div>
            <div class="button">
                <button type="submit">Envoyer le message</button>
            </div>
        </form>
        <div class="adressmaster">
            <div class="adressetitre">
                <h4>Adresse</h4>
            </div>
        <div class="adressetext">
            <p>Jeff Tuche</p>
            <p>5 route de Rocquigny</p>
            <p>Bouzolles, 59219</p>
            <p>06 15 03 45 67 86</p>
        </div>
    </div>
    <footer>
        <?php include('footer.php'); ?>
    </footer>
    </body>
</html>
