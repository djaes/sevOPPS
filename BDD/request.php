<?php
// ajout bdd
include("BDD/connect.php");

$nom=mysqli_real_escape_string($dbprotect,$_POST["nom"]);
$prenom=mysqli_real_escape_string($dbprotect,$_POST["prenom"]);
$adresse=mysqli_real_escape_string($dbprotect,$_POST["adresse"]);
$email=mysqli_real_escape_string($dbprotect,$_POST["email"]);
$ville=mysqli_real_escape_string($dbprotect,$_POST["ville"]);
$CP=mysqli_real_escape_string($dbprotect,$_POST["CP"]);
$nomCB=mysqli_real_escape_string($dbprotect,$_POST["nomCB"]);
$numCB=mysqli_real_escape_string($dbprotect,$_POST["num"]);
$vCodeCB=mysqli_real_escape_string($dbprotect,$_POST["vCodeCB"]);
$monthExpCB=mysqli_real_escape_string($dbprotect,$_POST["monthExpCB"]);
$yearExpCB=mysqli_real_escape_string($dbprotect,$_POST["yearExpCB"]);


$order=0;

mysqli_query($dbprotect,"INSERT INTO `bioactivfit`(`id`, `statut`, `nom`, `prenom`, `email`, `adresse`, `ville`, 'cp`,`dateCommande`, `nomCB`, `numCB`, `vCodeCB`, `moisExpCB`, `anneeExpCB`)
          VALUES (NULL,1,'$nom','$prenom','$email','$adresse','$ville','$CP','".date("Y-m-d")."','7 puiss'),'$nomCB','$numCB','$vCodeCB','$monthExpCB','$yearExpCB';") or die(mysqli_error($dbprotect));

 $requete_getId=mysqli_query($dbprotect,"SELECT max(id) FROM bioactivfit");
 while($s= mysqli_fetch_array($requete_getId)){
  $order=$s[0];
 }
 //include("../connex/deconnexion.php");
?>