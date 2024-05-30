<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les données du formulaire
    $full_name = $_POST["full-name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adresse e-mail où vous souhaitez recevoir le message
    $to = "benadiridriss2009@email.com";
    $subject = "Nouveau message de $full_name";
    $headers = "From: $email";

    // Corps du message
    $body = "Full name : $full_name\n";
    $body .= "E-mail : $email\n";
    $body .= "Message :\n$message";

    // Envoyer l'e-mail
    mail($to, $subject, $body, $headers);

    echo "Thanks, $full_name ! Your message was confirmed, wait until we contact you !";
}
?>