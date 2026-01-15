<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "sektravel478@gmail.com"; // email de l’ONG
    $subject = "Nouveau message - SANEDUCAT";

    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $telephone = isset($_POST["telephone"]) ? htmlspecialchars($_POST["telephone"]) : "Non renseigné";
    $type = isset($_POST["type_membre"]) ? htmlspecialchars($_POST["type_membre"]) : "Contact";
    $message = htmlspecialchars($_POST["message"]);

    $body = "
    Nom : $nom
    Email : $email
    Téléphone : $telephone
    Type : $type

    Message :
    $message
    ";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: merci.html");
        exit();
    } else {
        echo "Erreur lors de l’envoi du message.";
    }
}
?>
