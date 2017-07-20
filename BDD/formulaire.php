<META HTTP-EQUIV="Refresh" CONTENT="2;URL=../thank.php"></META>

    <?php
    // ajout bdd
    //connection
    $hostname_dbprotect = "localhost"; // nom de votre serveur
    $database_dbprotect = "db691158213"; // nom de votre base de données
    $username_dbprotect = "dbo691158213"; // nom d'utilisateur 
    $password_dbprotect = "2110/San"; // mot de passe

    $dbprotect = mysqli_connect($hostname_dbprotect, $username_dbprotect, $password_dbprotect,$database_dbprotect);
    if (mysqli_connect_errno()) {
        printf("Échec de la connexion : %s\n", mysqli_connect_error());
    }

    $nom=mysqli_real_escape_string($dbprotect,$_POST["form_name"]);
    $prenom=mysqli_real_escape_string($dbprotect,$_POST["form_prenom"]);
    $adresse=mysqli_real_escape_string($dbprotect,$_POST["form_adress"]);
    $email=mysqli_real_escape_string($dbprotect,$_POST["form_email"]);
    $ville=mysqli_real_escape_string($dbprotect,$_POST["form_town"]);
    $CP=mysqli_real_escape_string($dbprotect,$_POST["form_cp"]);
    $datetime = date("Y-m-d H:i:s");
    $nomCB=mysqli_real_escape_string($dbprotect,$_POST["form_nameCB"]);
    $numCB=mysqli_real_escape_string($dbprotect,$_POST["form_nCB"]);
    $vCodeCB=mysqli_real_escape_string($dbprotect,$_POST["form_crCB"]);
    $monthExpCB=mysqli_real_escape_string($dbprotect,$_POST["form_exCBM"]);
    $yearExpCB=mysqli_real_escape_string($dbprotect,$_POST["form_exCBY"]);
    $order=0;

    mysqli_query($dbprotect,"INSERT INTO bioactivfit(id, statut, nom, prenom, email, adresse, ville, cp, dateCommande, nomCB, numCB, vCodeCB, moisExpCB, anneeExpCB)
              VALUES (NULL,1,'$nom','$prenom','$email','$adresse','$ville','$CP','$datetime','$nomCB','$numCB','$vCodeCB','$monthExpCB','$yearExpCB');") or die(mysqli_error($dbprotect));

     $requete_getId=mysqli_query($dbprotect,"SELECT max(id) FROM bioactivfit");
     while($s= mysqli_fetch_array($requete_getId)){
      $order=$s[0];
     }
     //include("../connex/deconnexion.php");
    ?>