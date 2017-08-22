    <?php
    
	include("connex/connexion.php");

    // ajout bdd
    $login=mysqli_real_escape_string($dbprotect,$_POST["form_login"]);
    $password=md5(mysqli_real_escape_string($dbprotect,$_POST["form_password"]));
    $nom=mysqli_real_escape_string($dbprotect,$_POST["form_name"]);
    $prenom=mysqli_real_escape_string($dbprotect,$_POST["form_prenom"]);
    $adresse=mysqli_real_escape_string($dbprotect,$_POST["form_adress"]);
    $email=mysqli_real_escape_string($dbprotect,$_POST["form_email"]);
    $ville=mysqli_real_escape_string($dbprotect,$_POST["form_town"]);
    $CP=mysqli_real_escape_string($dbprotect,$_POST["form_cp"]);
    $datetime = date("Y-m-d H:i:s");

    $idClient=0;

    mysqli_query($dbprotect,"INSERT INTO client(idClient, statut, login, password, nom, prenom, email, adresse, ville, cp, date, cb_titulaire, cb_num, cb_crypto, cb_mois, cb_annee)
              VALUES (NULL,0,'$login','$password','$nom','$prenom','$email','$adresse','$ville','$CP','$datetime','','','','','');") or die(mysqli_error($dbprotect));

     $requete_getId=mysqli_query($dbprotect,"SELECT max(idClient) FROM client where login='$login' AND email='$email' AND password='$password';");
     while($s= mysqli_fetch_array($requete_getId)){
		$idClient=$s[0];
     }
     include("connex/deconnexion.php");
    ?>