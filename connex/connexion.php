<?php
	//connection
    $hostname_dbprotect = "localhost"; // nom de votre serveur
    $database_dbprotect = "db691158213"; // nom de votre base de données
    $username_dbprotect = "dbo691158213"; // nom d'utilisateur 
    $password_dbprotect = "2110/San"; // mot de passe

    $dbprotect = mysqli_connect($hostname_dbprotect, $username_dbprotect, $password_dbprotect,$database_dbprotect);
    if (mysqli_connect_errno()) {
        printf("Échec de la connexion : %s\n", mysqli_connect_error());
    }
?>