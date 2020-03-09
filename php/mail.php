<?php
    $name = strip_tags($_POST['name']);
    $mail = strip_tags($_POST['mail']);
    $objet = strip_tags($_POST['objet']);
    $message = strip_tags($_POST['message']);
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: ' . $mail . "\r\n";

    $message = '<h1>Message envoyé depuis la page Contact de agence-iceberg.fr</h1>
    <p><b>Nom : </b>' . $name . '<br>
    <b>Email : </b>' . $mail . '<br>
    <b>Message : </b>' . $message . '</p>';

    $retour = mail('agence.iceberg.lr@gmail.com', 'Objet : ' . $objet, $message, $entete);
    if($retour) {
        ?>
            <script>
                window.location = '../index.php#Contact';
            </script>
        <?php
    }
?>