<form id="cmdForm" name="cmdForm" class="register-form form-transparent" method="post" action="BDD/formulaire.php"  style="margin: 20px;" onsubmit="return valider(this)">

    <div class="row">

        <div class="form-group col-md-6">
            <div class="form-group col-md-6">
              <label for="form_prenom">Prénom *</label>
              <input id="form_prenom" name="form_prenom" class="form-control" type="text" required placeholder="Prénom">
            </div>
            <div class="form-group col-md-6">
              <label for="form_name">Nom *</label>
              <input id="form_name" name="form_name" class="form-control" type="text" required placeholder="Nom">
            </div>
            <div class="form-group col-md-12">
                <hr><br>
            </div>
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
              <input id="form_cp" name="form_cp" class="form-control" type="text" required placeholder="CP">
            </div>
            <div class="form-group col-md-8">
              <label>Ville *</label>
              <input id="form_town" name="form_town"  class="form-control" type="text" required placeholder="Ville">
            </div>

        </div>
        <div class="form-group col-md-6">
            <div class="form-group col-md-12">
                <img id="verifiedCard" alt="" src="images/paiement/verification_by_visa.jpg">
            </div>
            <div class="form-group col-md-10">
              <label for="form_nameCB">Titulaire de la carte *</label>
              <input id="form_nameCB" name="form_nameCB" class="form-control" type="text" required placeholder="Nom figurant sur la carte">
            </div>
            <div class="form-group col-md-10">
              <label>Numéro de carte *</label>
              <input id="form_nCB" name="form_nCB" class="form-control" type="text" required placeholder="N° de carte en cours de validité">
            </div>
            <div class="form-group col-md-8">
                <label>Date d'expiration *</label>
                <div id="selectDate" style=" display: inline-flex" >
                    <select id="form_exCBM" name="form_exCBM" name="exCB_month"  class="form-control">
						<?php
							for($i=1;$i<=12;$i++){
								$i_print=str_pad($i, 2, '0', STR_PAD_LEFT);
								echo "<option value='$i_print'>$i_print</option>";
							}
						?>
                                            
                    </select>
                    <select id="form_exCBY" name="form_exCBY" name="exCB_year"  class="form-control" style="padding: 5px;">
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
                <input id="form_crCB" name="form_crCB" class="form-control" type="text" required placeholder="Crp">
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
        <button type="button" class="btn btn-default " data-dismiss="modal" >Quitter</button>
    </div>
       </div>
       <div class="col-md-1">
       </div>

        </div>
        </form>