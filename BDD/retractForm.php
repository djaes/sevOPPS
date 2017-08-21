<?php
    $retract_date = $_POST['retract_date'] ;
    $retract_nCmd = $_POST['retract_nCmd'] ;
    $retract_name = $_POST['retract_name'] ;
    $retract_address = $_POST['retract_address'] ;
    $retract_checkSign = $_POST['retract_checkSign'] ;

    $dateCmd = "date: <b>".$retract_date."</b><br>\n";
    $numCmd = "numero de commande: <b>".$retract_nCmd."</b><br>\n";
    $nameCmd = "nom: <b>".$retract_name."</b><br>\n";
    $addCmd = "adresse: <b>".$retract_address."</b><br>\n";
    $test = $retract_checkSign;



    $headers ='From: "nom"<adresse@fai.fr>'."\n";
    $headers .='Reply-To: adresse_de_reponse@fai.fr'."\n";
    $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n";
    $headers .='Content-Transfer-Encoding: 8bit';

    $message ="<html><head><title>Mail de retractation</title></head><body>".$dateCmd.$numCmd.$nameCmd.$addCmd."</body></html>";

    if(mail('bioactivfit@gmail.com', 'Sujet', $message, $headers))
    {
      echo 'Le message a été envoyé';
    }
    else
    {
      echo 'Le message n\'a pu être envoyé';
    }
?>