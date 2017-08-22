// JavaScript Document
jQuery(
function($){
	$("#test-cb").click(function(){
		var cb_crypto = $("#cb_crypto").val();
		var cb_annee = $("#cb_annee").val();
		var cb_mois = $("#cb_mois").val();
		var cb_num = $("#cb_num").val();
		var cb_titulaire = $("#cb_titulaire").val();
		var email = $("#email").val();
		var idClient = $("#idClient").val();
		if(cb_crypto != "" && cb_num != "" && cb_titulaire != ""){
			$.ajax({
				  // chargement du fichier externe monfichier-ajax.php 
				  url      : "ajax/test-cb-be2bill.php",
				  dataType : "json",
				  // Passage des donnÃ©es au fichier externe (ici le nom cliquÃ©)  
				  type     : "POST",		
				  data     : {cb_crypto: cb_crypto, email: email, cb_annee: cb_annee, cb_mois: cb_mois, cb_num: cb_num, cb_titulaire: cb_titulaire, idClient : idClient},
				  error    : function(request, error) { // Info Debuggage si erreur         
							   alert("Erreur : responseText: "+request.responseText);
							 },
				  beforeSend: function() {
					$("#button-test").html("<span><img src='images/loader.gif'/> Nous traitons votre demande, veuillez patienter</span>");
				  },
				  success  : function(data) {
					if(data.error === "000"){
						$.redirect("https://bioactivfit.fr/thank.php",
						  {
							cb_crypto: cb_crypto,
							idClient: idClient,
							email: email,
							cb_annee: cb_annee,
							cb_mois: cb_mois,
							cb_num: cb_num,
							cb_titulaire: cb_titulaire,
							transaction_id: data.transaction_id,
							token: data.token,
							montant: data.montant
						  },
						  "POST");
					
					//alert(data.transaction_id);
					}				  
					if(data.error !== "000" && data.error !== "999" && data.error !== "1000"){
						$("#button-test").html("ERREUR votre carte banquaire ne passe pas. Veuillez ré-essayer plus tard <br/><button disabled id='test-cb' class='btn btn-tchat btn-lg btn-block'>VALIDER</button>");
					}
					if(data.error === "999"){
						//$("#retour_rebill_"+idClient).html(data);
						$("#button-test").html("Vous &ecirc;tes d&eacute;j&agrave; en abonnement. <a href='index_login.php'> Cliquez ici pour vous connecter</a><br/><button id='test-cb' disabled class='btn btn-tchat btn-lg btn-block'>VALIDER</button>");
					}
					if(data.error === "1000"){
						//$("#retour_rebill_"+idClient).html(data);
						$("#button-test").html("Num&eacute;ro de carte banquaire invalide.<br/><button id='test-cb' disabled class='btn btn-tchat btn-lg btn-block'>VALIDER</button>");
					}

				  }       
			});
		}else{
			alert("Merci de remplir le formulaire en entier.");
		}
		//alert(idClient);
		/*$(this).prop('disabled', true);*/
	});
});
