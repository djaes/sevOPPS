<?php
    include '../include/var.php';
    $retract_date = $_POST['retract_date'] ;
    $retract_nCmd = $_POST['retract_nCmd'] ;
    $retract_name = $_POST['retract_name'] ;
    $retract_address = $_POST['retract_address'] ;
    $retract_addressMail = $_POST['retract_addressMail'] ;
    $retract_msg = $_POST['commentsRetract'] ;
    $retract_checkSign = $_POST['retract_checkSign'] ;

    $dateCmd = "date de la commande: <b>".$retract_date."</b><br>\n";
    $numCmd = "numero de commande: <b>".$retract_nCmd."</b><br>\n";
    $nameCmd = "nom: <b>".$retract_name."</b><br>\n";
    $addCmd = "adresse: <b>".$retract_address."</b><br>\n";
    $test = $retract_checkSign;



    $headers ='From: "'.$retract_name.'"<'.$retract_addressMail.'>'."\n";
    $headers .='Reply-To: adresse_de_reponse@fai.fr'."\n";
    $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n";
    $headers .='Content-Transfer-Encoding: 8bit';

    $message ="<html><head><title>Mail de retractation</title></head><body><p>".$dateCmd.$numCmd.$nameCmd.$addCmd."</p><p> le message conditionnant la retractation : ".$retract_msg."</p></body></html>";

    if(mail($addrMail, 'Retractation', $message, $headers))
    {
      echo 'Le message a été envoyé, vous allez etre redirigé sur la page d\'accueil';
        echo "<meta http-equiv=\"refresh\" content=\"2;url=../index.php\"/>";
    }
    else
    {
      echo 'Le message n\'a pu été envoyé , vous allez etre redirigé sur la page de contact';
        echo "<meta http-equiv=\"refresh\" content=\"2;url=../contact.php\"/>";
    }
?>