<?php
	include("connex/connexion.php");
	$login=mysqli_real_escape_string($dbprotect,$_POST["login"]);
	$password=md5($_POST["password"]);
	$requete_select_client=mysqli_query($dbprotect,"SELECT * FROM client WHERE password='$password' AND (login='$login' OR email='$login');") or die(mysqli_error($dbprotect)); 
	$OK=0;
	include("connex/deconnexion.php");
	while($s=mysqli_fetch_array($requete_select_client)){
		$_SESSION["id"] = $s['idClient'];
		$_SESSION["prenom"]=$s['prenom'];
		$_SESSION["email"] = $s['email'];
		$OK=1;
	}
	if(!$OK)
		header("location: index.php?login=0");
	
?>