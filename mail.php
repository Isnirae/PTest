<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('isnirae@yahoo.fr', $_POST['subject'], $_POST['message'], $_POST['email']);
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>