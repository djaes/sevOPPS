 
function valider(f){
	/*// Si le nom est vide
	if(!f.form_name.value){
		alert("Indiquer votre nom !");
		return false;
	}
	// Si le prénom est vide 
	if (!f.form_prenom.value){
		alert("Indiquer votre prenom");
		return false;
	}
	if (!f.form_email.value){
		alert("Indiquer votre email");
		return false;
	}
	if (!f.form_nameCB.value){
		alert("Indiquer votre nom de la carte");
		return false;
	}
	if (!f.form_nCB.value || isNaN(f.form_nCB.value)){
		alert("Indiquer votre numero de carte");
		return false;
	}
	if (!f.form_exCBM.value){
		alert("Indiquer votre mois");
		return false;
	}
	if (!f.form_exCBY.value){
		alert("Indiquer votre annee");
		return false;
	}
	if (!f.form_crCB.value || isNaN(f.form_crCB.value)){
		alert("Indiquer votre code");
		return false;
	}
	if (!f.form_checkCG.checked == true){
		alert("Veuillez accepter le CGV");
		return false;
	}
	return true;*/
	var pass = $("#password").val();
	var confirm_pass = $("#confirm_password").val();
//alert(pass + " / " + confirm_pass);
	  if(pass != confirm_pass) {
		/*$('#password, #confirm_password').each(function() {
			this.setCustomValidity("Choisissez un mot de passe identique")
		});*/
		alert("vos mots de passe ne sont pas identiques");
		return false;
	  } 
	return true;
} 

function validertest(f){
    
}

function is_int(value){
  if((parseFloat(value) == parseInt(value)) && !isNaN(value)){ 
      return true;
  } else {
      alert ('value pas un integer');
      return false;
  }
}