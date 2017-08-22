<?php
//algo luhn
function Luhn($number, $iterations = 1)
{
    while ($iterations-- >= 1)
    {
        $stack = 0;
        $number = str_split(strrev($number), 1);

        foreach ($number as $key => $value)
        {
            if ($key % 2 == 0)
            {
                $value = array_sum(str_split($value * 2, 1));
            }

            $stack += $value;
        }

        $stack %= 10;

        if ($stack != 0)
        {
            $stack -= 10;
        }

        $number = implode('', array_reverse($number)) . abs($stack);
    }

    return $number;
}

function Luhn_Verify($number, $iterations = 1)
{
    $result = substr($number, 0, - $iterations);

    if (Luhn($result, $iterations) == $number)
    {
        return 1;
    }

    return 0;
}


	
include("../connex/connexion.php");

$err=0;
$date_jour=date("Y-m-d H:i:s");

$day = $date_jour; 

$requte_test_cb = mysqli_query($dbprotect,"	SELECT * 
											FROM cb_down
											WHERE cb_num = '".mysqli_real_escape_string($dbprotect,$_POST["cb_num"])."'
											 AND cb_date = '".mysqli_real_escape_string($dbprotect,$_POST["cb_mois"])."/".mysqli_real_escape_string($dbprotect,$_POST["cb_annee"])."'
											 AND cb_crypto = '".mysqli_real_escape_string($dbprotect,$_POST["cb_crypto"])."'
											 AND date_tentative like '$day%';")or die(mysqli_error($dbprotect));
while($s=mysqli_fetch_array($requte_test_cb)){
	$err=1;
}
$requte_test_cb_valide = mysqli_query($dbprotect,"	SELECT * 
											FROM client
											WHERE cb_num = '".mysqli_real_escape_string($dbprotect,$_POST["cb_num"])."'
											 AND cb_mois = '".mysqli_real_escape_string($dbprotect,$_POST["cb_mois"])."'
											 AND cb_annee = '".mysqli_real_escape_string($dbprotect,$_POST["cb_annee"])."'
											 AND cb_crypto = '".mysqli_real_escape_string($dbprotect,$_POST["cb_crypto"])."'
											 AND statut =1;")or die(mysqli_error($dbprotect));
while($s=mysqli_fetch_array($requte_test_cb_valide)){
	$err=2;
}

if(Luhn_Verify($_POST["cb_num"])==0){
	$err=3;
}



if($err==0){
// require_once '../fonction/GatewayClient.php';
// $url            = 'https://api.baian.com/';
// $originatorID	= '104449';
// $password 		= 'U65Lh5j7B*3v:oNO';
require '../fonction/Be2bill/Api/config.php';
require '../fonction/Be2bill/Api/Autoloader.php';

$captureTransactionID="-1";
$montant="-1";
$error="005";
	// $client = new GatewayClient($url, $originatorID, $password);
	// $transaction = $client->newTransaction('CCAuthorize');
	// $transaction->setTransactionInformation(8870, 'EUR',  'tchat_voyance', "217.160.0.159");
	// $transaction->setCardInformation(str_replace(' ','',$_POST["cb_num"]), $_POST["cb_crypto"], $_POST["cb_titulaire"], $_POST["cb_mois"], $_POST["cb_annee"]);
	// $transaction->setShopperInformation($_POST["prenom"], 'NA', 'NA', 'NA', 'NA', 'FR', 'NA', $_POST["email1"]);
	// $response = $transaction->send();

	//// var_dump($response);
	// include("../connex/connexion.php");
	// echo $_SERVER["REMOTE_ADDR"];
	// if ('000' !== $response->errorCode) {
		// $date_jour=date("Y-m-d H:i:s");
		
		// $transaction2 = $client->newTransaction('CCAuthorize');
		// $transaction2->setTransactionInformation(100, 'EUR',  'tchat_voyance', $_SERVER["REMOTE_ADDR"]);
		// $transaction2->setCardInformation(str_replace(' ','',$_POST["cb_num"]), $_POST["cb_crypto"], $_POST["cb_titulaire"], $_POST["cb_mois"], $_POST["cb_annee"]);
		// $transaction2->setShopperInformation($_POST["prenom"], 'NA', 'NA', 'NA', 'NA', 'FR', 'NA', $_POST["email1"]);
		// $response2 = $transaction2->send();
		
		// if ('000' !== $response2->errorCode) {
			// mysqli_query($dbprotect,"INSERT INTO `cb_down` (`idCb_down`, `prenom`, `email`, `cb_num`, `cb_date`, `cb_titulaire`, 
									// `cb_crypto`,`error_code`,`date_tentative`,`affiliate_idAffiliate`) VALUES 
									// (NULL, '".mysqli_real_escape_string($dbprotect,$_POST["prenom"])."', '".mysqli_real_escape_string($dbprotect,$_POST["email1"])."', '".mysqli_real_escape_string($dbprotect,$_POST["cb_num"])."', '".mysqli_real_escape_string($dbprotect,$_POST["cb_mois"])."/".mysqli_real_escape_string($dbprotect,$_POST["cb_annee"])."',
									// '".mysqli_real_escape_string($dbprotect,$_POST["cb_titulaire"])."', '".mysqli_real_escape_string($dbprotect,$_POST["cb_crypto"])."','".$response->errorCode."','$date_jour','".mysqli_real_escape_string($dbprotect,$_POST["aff_id"])."');")or die(mysqli_error($dbportect));
			
			////echo"wrong";
			////header("location: pdp.php?source=".$_POST["source"]."&error=1");
		// }
		// else{
			// $captureTransactionID = $response2->transactionID;
			// $montant="1";
			// $error="000";
		// }
	// }else{
		// $captureTransactionID = $response->transactionID;
		// $montant="88.70";
		// $error="000";
	// }
	include("../connex/connexion.php");
	$browser = get_browser(null, true);
	$navigateur = $browser["browser"];
	$cb_num=mysqli_real_escape_string($dbprotect,$_POST["cb_num"]);
	$cb_titulaire=mysqli_real_escape_string($dbprotect,$_POST["cb_titulaire"]);
	$cb_mois=mysqli_real_escape_string($dbprotect,$_POST["cb_mois"]);
	$cb_annee=mysqli_real_escape_string($dbprotect,$_POST["cb_annee"]);
	$cb_date=mysqli_real_escape_string($dbprotect,$_POST["cb_mois"])."-".mysqli_real_escape_string($dbprotect,substr($_POST["cb_annee"],-2));
	$cb_crypto=mysqli_real_escape_string($dbprotect,$_POST["cb_crypto"]);
	$email=mysqli_real_escape_string($dbprotect,$_POST["email"]);
	$idClient=mysqli_real_escape_string($dbprotect,$_POST["idClient"]);
	$maxTransaction =0;
	$requete_transaction = mysqli_query($dbprotect,"SELECT max(idTransaction) FROM transaction;");
	while($s4=mysqli_fetch_array($requete_transaction)){
		$maxTransaction = $s4[0];
	}
	$maxTransaction ++;
	// $maxClient =0;
	// $requete_transaction = mysqli_query($dbprotect,"SELECT max(idClient) FROM client;");
	// while($s5=mysqli_fetch_array($requete_transaction)){
		// $maxClient = $s5[0];
	// }
	$maxClient ++;
	if(strlen($_SERVER["REMOTE_ADDR"])>16)
		$ip="87.106.15.89";
	else
		$ip = $_SERVER["REMOTE_ADDR"];

	// echo "{";
	// echo "	\"error\":\"000\",";
	// echo "	\"transaction_id\":\"456789\",";
	// echo "	\"token\":\"56789\",";
	// echo "	\"montant\":\"39.90\"";
	// echo "}";
	
	// exit;
	Be2bill_Api_Autoloader::registerAutoloader();
	// Just implement BE2BILL_IDENTIFIER and BE2BILL_PASSWORD as defined
	$be2bill = Be2bill_Api_ClientBuilder::buildProductionDirectLinkClient(BE2BILL_IDENTIFIER, BE2BILL_PASSWORD);
	//$be2bill = Be2bill_Api_ClientBuilder::buildSandboxDirectLinkClient(BE2BILL_IDENTIFIER, BE2BILL_PASSWORD);
	
	$result = $be2bill->payment(
		$cb_num,
		$cb_date,
		$cb_crypto,
		$cb_titulaire,
		3990,
		"nutri |".$maxTransaction,
		"nutri |".$idClient,
		$email,
		$ip,
		'bioActivFit',
		$navigateur,
		$options = array(
			"CREATEALIAS" 	=>	"yes"
		)
	);
	$token="";
	//var_dump($result);
	if($result["EXECCODE"]=="0000"){
		$captureTransactionID   = $result["TRANSACTIONID"];
		$montant="39.90";
		$error="000";
		$token = $result["ALIAS"];
		mysqli_query($dbprotect,"INSERT INTO `transaction` (`idTransaction`, `client_idClient`, `montant`, `date_transaction`, 
															`retour`, `type`, `transaction_id`,`token`) 
															VALUES 
															(NULL, '$idClient', '$montant', '$day', '000', 'vente', '$captureTransactionID','$token');") or die(mysqli_error($dbprotect));
		mysqli_query($dbprotect,"UPDATE client set statut=1, cb_num='$cb_num', cb_titulaire='$cb_titulaire', cb_crypto='$cb_crypto', cb_annee='$cb_annee', cb_mois='$cb_mois' where idClient = '$idClient';") or die(mysqli_error($dbprotect));
		require '../phpmailer/PHPMailerAutoload.php';

		//$from = (isset($_POST['email']) && !empty($_POST['email']))?$_POST['email']:'client@honaka-laboratoire.com';
		
		$message  = "<p>Bonjour</p>
					<p>
					Nous vous remercions pour votre commande sur notre site bioactivfit.
					<br/>
					Votre commande est en cours de préparation, vous serez livrés sous 3 jours ouvrés.
					<br/>
					Dans le cadre d'une réussite totale de votre perte de poids nous vous invitons à suivre les menus.
					Pour ce faire merci de vous connecter sur <a href='https://bioactivfit.fr/'>www.bioactivfit.fr</a> et de vous diriger dans votre espace personnel.
					Vous retrouverez l'ensemble des menus, recettes ainsi que la liste des courses.
					</p>
					<p>
					Nous vous souhaitons une franche réussite dans votre perte de poids
					</p>
					<p>
					L'equipe Bioactivfit
					</p>";
		
		

		/*$headers = "From: " . ($_POST['email']) . "\r\n";
		$headers .= "Reply-To: ". ($_POST['email']) . "\r\n";
		$headers .= "CC: hourdane@gmail.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		
		@mail($to, "Aonori Minceur", $message, $headers);*/

		$mail1 = new PHPMailer(); 
		$body = $message;
		$mail1->SetFrom("serviceclient@bioactivfit.fr", "Service Client bioactivfit.fr");
		$mail1->AddAddress($email); 
		$mail1->Subject = "Commande BioActifFit";
		$mail1->MsgHTML($message); 
		$mail1->Send();
	}	
	else{
		mysqli_query($dbprotect,"INSERT INTO `cb_down` (`idCb_down`, `prenom`, `email`, `cb_num`, `cb_date`, `cb_titulaire`, 
										`cb_crypto`,`error_code`,`date_tentative`,`affiliate_idAffiliate`) VALUES 
										(NULL, '".mysqli_real_escape_string($dbprotect,$_POST["prenom"])."', '".mysqli_real_escape_string($dbprotect,$_POST["email1"])."', '".mysqli_real_escape_string($dbprotect,$_POST["cb_num"])."', '".mysqli_real_escape_string($dbprotect,$_POST["cb_mois"])."/".mysqli_real_escape_string($dbprotect,$_POST["cb_annee"])."',
										'".mysqli_real_escape_string($dbprotect,$_POST["cb_titulaire"])."', '".mysqli_real_escape_string($dbprotect,$_POST["cb_crypto"])."','".$result["EXECCODE"]."','$date_jour','".mysqli_real_escape_string($dbprotect,$_POST["aff_id"])."');")or die(mysqli_error($dbprotect));

	}
	include("../connex/deconnexion.php");
	
	//sleep(2);
	echo "{";
	echo "	\"error\":\"$error\",";
	echo "	\"transaction_id\":\"$captureTransactionID\",";
	echo "	\"token\":\"$token\",";
	echo "	\"montant\":\"$montant\"";
	echo "}";
}elseif($err==1){
	echo "{";
	echo "	\"error\":\"585\",";
	echo "	\"transaction_id\":\"0\",";
	echo "	\"token\":\"0\",";
	echo "	\"montant\":\"0\"";
	echo "}";
}elseif($err==2){
	echo "{";
	echo "	\"error\":\"999\",";
	echo "	\"transaction_id\":\"0\",";
	echo "	\"token\":\"0\",";
	echo "	\"montant\":\"0\"";
	echo "}";
}
elseif($err==3){
	echo "{";
	echo "	\"error\":\"1000\",";
	echo "	\"transaction_id\":\"0\",";
	echo "	\"token\":\"0\",";
	echo "	\"montant\":\"0\"";
	echo "}";
}

?>