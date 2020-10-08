<?php
?>
<!DOCTYPE HTML>
<html lang="fr"
    <head>
    <meta charset="UTF-8" >
        <title>Page de contacte</title>
        <link href="contact.css" media="all" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <header>
        <?php include('header.php'); ?>
    </header>

        <div class="paragraphe">
            <p>Merci d'avoir pris le temps de lire mon curriculum vitae. Pour me contacter, je vous invite à m'envoyer
                un message en remplissant le formulaire.</p>
        </div>
    <div class="adressmaster">
        <div class="adressetitre">
            <h4>Adress</h4>
        </div>
        <div class="adressetext">
            <p>Jeff Tuche</p>
            <p>1600 Grand Hotel</p>
            <p>Monaco, 98000</p>
        </div>
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
            <label for="subject">Subject :</label>
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
    <footer>
        <?php include('footer.php'); ?>
    </footer>
    </body>
</html>
