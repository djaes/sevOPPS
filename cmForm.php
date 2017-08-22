<section class="commandForm" >
    <header>
    
    </header>
    <form name="cmdForm" class="register-form form-transparent" method="post" action="finalCommande.php"  style="margin: 20px;" onsubmit=" return valider(this);"; >
    <div class="row">
		<div class="form-group col-md-5 form-box" >
			<div class="row">
				<h3 class="box">1. Votre commande</h3>
			</div>
				<table class="table table-condensed">
                    <tr>
						<td colspan="2">
                            <div id="full-cart-info" class="full-cart">
								<div id="total-cart-info" class="total-cart-img bold text-center">
									<p class="h4">Cure complète 1 mois BioActivFit (6 jours d'essai gratuit)</p>
									<img src="<?php echo $productImgDescript; ?>" style="height:50px;" alt=""><p class="price"><span>5,90 €</span></p>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<th>Détail produits</th>
						<th class="text-right" nowrap="">Prix TTC</th>
					</tr>
					<tr>
						<td class="text-left">BioActivFit cure minceur - 1 boîte (6 jours offerts)</td>
						<td class="text-right"><span>0,00 €</span></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;"><span>Livraison standard à domicile</span></td>
						<td style="vertical-align:middle;" class="text-right"><span>5,90 €</span></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;"><label>Coaching Minceur (élaboré par une nutritionniste)</label></td>
						<td style="vertical-align:middle;" class="text-right"><label>OFFERT</label></td>
					</tr>
					<tr class="totalttc">
						<td class="text-right" colspan="3" style="background:#fff;"><strong>Total TTC avec livraison : </strong><strong id="total" class="big totalTTC">5,90 €</strong></td>
					</tr>
				</table>
			
		</div>
        <div class="form-group col-md-6 form-box">
			<div class="row">
				<h3 class="box">2. Adresse</h3>
            </div>
			<div class="form-group col-md-6">
              <label for="form_prenom">Identifiant *</label>
              <input id="form_login" name="form_login" class="form-control" type="text" required placeholder="login">
            </div>
            <div class="form-group col-md-6">
              <label for="form_name">Mot de passe *</label>
              <input id="password" name="form_password" class="form-control" type="password" required placeholder="mot de passe">
              <input id="confirm_password" name="form_password2" class="form-control" type="password" required placeholder="répéter le mot de passe">
            </div>
			<div class="form-group col-md-6">
              <label for="form_prenom">Prénom *</label>
              <input id="form_prenom" name="form_prenom" class="form-control" type="text" required placeholder="Prénom">
            </div>
            <div class="form-group col-md-6">
              <label for="form_name">Nom *</label>
              <input id="form_name" name="form_name" class="form-control" type="text" required placeholder="Nom">
            </div>
                <hr/>
            <div class="form-group col-md-12">
              <label>Adresse Mail *</label>
              <input id="form_email" name="form_email" class="form-control" type="email" required placeholder="Adresse e-mail valide">
            </div>
            <div class="form-group col-md-12">
              <label>Adresse Postal *</label>
              <input id="form_adress" name="form_adress" class="form-control" type="text" required placeholder="Adresse">
            </div>
            <div class="form-group col-md-4">
              <label for="form_cp">C.P *</label>
              <input id="form_cp" name="form_cp" class="form-control" type="number" required placeholder="CP">
            </div>
            <div class="form-group col-md-8">
              <label>Ville *</label>
              <input id="form_town" name="form_town"  class="form-control" type="text" required placeholder="Ville">
            </div>
		</div>
       
    </div>
    <p class="text-center">* obligatoire</p>

   <div class="row">
       <div class="col-md-1">
       </div>
       <div class="col-md-10 text-center">
           <label>
        <input type="checkbox" name="form_checkCG" value="checkCG"> J'accepte les conditions générales et confirme avoir l'âge minimum légal.
    </label>
    <div class="form-group">
        <input type="submit" class="btn btn-dark btn-lg btn-block" value="Commander">
        
    </div>
       </div>
       <div class="col-md-1">
       </div>

    </div>
</form>
</section>

<script src="js/checkForm.js"></script>
