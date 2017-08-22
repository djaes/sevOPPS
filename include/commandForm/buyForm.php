
<form class="register-form form-transparent" style="margin: 20px;">
	<?php
		echo "<input type='hidden' name='idClient' id='idClient' value='$idClient'/>";
		echo "<input type='hidden' name='email' id='email' value='$email'/>";
	?>
    <div class="row">
		<div class="form-group col-md-5 " >
			<h4> Votre commande BioActivFit</h4>
			<table class="table table-bordered">
				<tr>
					<td colspan="4">
						<strong>N° commande :</strong> 
					</td>
				</tr>
				<tr>
					<td colspan="4">
						Bioactiv-uid5897C2469
					</td>
				</tr>
				<tr>
					<th>Produit</th>
					<th>Qté</th>
					<th>Prix Unitaire</th>
					<th>Total</th>
				</tr>
				<tr>
					<td class="text-left">BioActivFit Cure Miceur - 1 boîte (6 jours d'essai gratuit) </td>
					<td class="text-right"> 1 </td>
					<td class="text-right"><span>0,00€</span></td>
					<td class="text-right"><span>0,00€</span></td>
				</tr>
				<tr>
					<td style="vertical-align:middle;"><span>Livraison standard à domicile</span></td>
					<td class="text-right"> 1 </td>
					<td class="text-right"><span>5,90€</span></td>
					<td class="text-right"><span>5,90€</span></td>
				</tr>
		
				<tr class="totalttc">
					<td class="text-right" colspan="3"><strong>Total : </strong></td>
					<td><strong id="total" class="big totalTTC">5,90€</strong></td>
				</tr>
			</table>
		</div>
        <div class="form-group col-md-6 pay-box">
			<div class="row">
				<h3> <i class="fa fa-shield" ></i>     Paiement Sécurisé</h3>
			</div>
            <div class="form-group col-md-10">
              <label for="cb_titulaire">Titulaire de la carte *</label>
              <input id="cb_titulaire" name="cb_titulaire" class="form-control" type="text" required placeholder="Nom figurant sur la carte">
            </div>
            <div class="form-group col-md-10">
              <label>Numéro de carte *</label>
              <input id="cb_num" name="cb_num" class="form-control" type="text" required placeholder="N° de carte en cours de validité">
            </div>
            <div class="form-group col-md-8">
                <label>Date d'expiration *</label>
				
                <div id="selectDate" class="col-md-10" style=" display: inline-flex" >
                    <select id="cb_mois" name="cb_mois" class="form-control">
						<?php
							for($i=1;$i<=12;$i++){
								$i_print=str_pad($i, 2, '0', STR_PAD_LEFT);
								echo "<option value='$i_print'>$i_print</option>";
							}
						?>
                                            
                    </select>
                    <select id="cb_annee" name="cb_annee" class="form-control" >
						<?php
                            $dateActu = date('Y');
                            $dateLast = $dateActu+ 7;
                            for($i=$dateActu;$i<=$dateLast;$i++){
								echo "  <option value='$i'>$i</option>";
							}
						?>
                    </select>                       
                </div>
            </div>                
            <div class="form-group col-md-4">
                <label>V-Code *<img id="crypto" alt="" src="images/paiement/picto.png"></label>
                <input id="cb_crypto" name="cb_crypto" class="form-control" type="text" required placeholder="Crp">
            </div>
			<div class="form-group col-md-12 text-center">
                <img id="verifiedCard" alt="" style="max-width:200px;margin:auto;" src="images/paiement/verification_by_visa.jpg">
            </div>
			    <p class="text-center">* obligatoire</p>

		   <div class="row">
			   <div class="col-md-1">
			   </div>
			   <div class="col-md-10 text-center">
				   <label>
				<input type="checkbox" name="form_checkCG" value="checkCG"> J'accepte les conditions générales et confirme avoir l'âge minimum légal.
			</label>
			<div class="form-group" id="button-test">
				<button id="test-cb" class="btn btn-orange btn-xl btn-block" >Commander</button>
				<!--<button type="button" class="btn btn-default" >Quitter</button>-->
			</div>
        </div>
    </div>
</form>