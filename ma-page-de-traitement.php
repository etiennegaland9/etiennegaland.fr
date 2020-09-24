<?php
if (isset($_POST['mail'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "contact@etiennegaland.fr";
    $email_subject = "email recu du site etiennegaland.fr";

    function died($error)
    {
        // your error code can go here
        echo
            "Nous sommes désolés, mais des erreurs ont été détectées dans le" .
                " formulaire que vous avez envoyé. ";
        echo "Ces erreurs apparaissent ci-dessous.<br /><br />";
        echo $error . "<br /><br />";
        echo "Merci de corriger ces erreurs.<br /><br />";
        die();
    }

    // si la validation des données attendues existe
    if (
        !isset($_POST['lastname']) ||
        !isset($_POST['firstname']) ||
        !isset($_POST['mail']) ||
        !isset($_POST['message'])
    ) {
        died(
            'Nous sommes désolés, mais le formulaire que vous avez soumis semble poser' .
                ' problème.'
        );
    }

    $nom = $_POST['lastname']; // required
    $prenom = $_POST['firstname']; // required
    $email = $_POST['mail']; // required
    $commentaire = $_POST['message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .=
            'L\'adresse e-mail que vous avez entrée ne semble pas être valide.<br />';
    }

    // Prend les caractères alphanumériques + le point et le tiret 6
    $string_exp = "/^[A-Za-zÀ-ÖØ-öø-ÿ0-9 .'-]+$/";

    if (!preg_match($string_exp, $nom)) {
        $error_message .=
            'Le nom que vous avez entré ne semble pas être valide.<br />';
    }

    if (!preg_match($string_exp, $prenom)) {
        $error_message .=
            'Le prénom que vous avez entré ne semble pas être valide.<br />';
    }

    if (strlen($commentaire) < 2) {
        $error_message .=
            'Le commentaire que vous avez entré ne semble pas être valide.<br />';
    }

    if (strlen($error_message) > 0) {
        died($error_message);
    }

    $email_message = "Detail du message:\n\n";
    $email_message .= "Nom: " . $nom . "\n";
    $email_message .= "Prenom: " . $prenom . "\n";
    $email_message .= "Email: " . $email . "\n";
    $email_message .= "Commentaire: " . $commentaire . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);

    header("Location:merci.contact.php");
?>

    <!-- mettez ici votre propre message de succès en html -->

    Merci de nous avoir contacter. Nous vous contacterons très bientôt.

<?php

}