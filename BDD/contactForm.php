<?php
    include '../include/var.php';
    $prenom = $_POST['first_name'] ;
    $nom = $_POST['last_name'] ;
    $mail = $_POST['email'] ;
    $messageUtilisateur = $_POST['comments'] ;

    $headers ='From: "'.$nom.'"<'.$mail.'>'."\n";
    $headers .='Reply-To: adresse_de_reponse@fai.fr'."\n";
    $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n";
    $headers .='Content-Transfer-Encoding: 8bit';

    $message ="<html><head><title>Mail de contact</title></head><body><p>message de ".$prenom." ".$nom."</p><p>son addresse mail est : ".$mail."</p><p> Messages : ".$messageUtilisateur."</p></body></html>";

    if(mail($addrMail, 'Mail de contact', $message, $headers))
    {
        echo 'Le message a été envoyé, vous allez etre redirigé sur la page d\'accueil';
        echo "<meta http-equiv=\"refresh\" content=\"2;url=../index.php\"/>";
    }
    else
    {
        echo 'Le message n\'a pu être envoyé , vous allez etre redirigé sur la page de contact';
        echo "<meta http-equiv=\"refresh\" content=\"2;url=../contact.php\"/>";
    }
?>