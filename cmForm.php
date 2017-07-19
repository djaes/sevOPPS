

            
<section class="commandForm" style="border-radius: 30px;padding-top: 10px">
    <form name="cmdForm" class="register-form form-transparent" method="post"  style="margin: 20px;">

    <div class="row">
        
        <div class="form-group col-md-6">
            
            <div class="form-group col-md-6">
              <label for="form_name">Nom *</label>
              <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Nom">
            </div>
            <div class="form-group col-md-6">
              <label for="form_prenom">Prénom *</label>
              <input id="form_prenom" name="form_prenom" class="form-control" type="text" placeholder="Prénom">
            </div>
            <div class="form-group col-md-12">
                <hr><br>
            </div>
            <div class="form-group col-md-12">
              <label>Adresse Mail *</label>
              <input id="form_email" name="form_email" class="form-control" type="email" placeholder="Adresse e-mail valide">
            </div>
            <div class="form-group col-md-12">
              <label>Adresse Postal</label>
              <input id="form_adress" name="form_adress" class="form-control" type="text" placeholder="Adresse">
            </div>
            <div class="form-group col-md-4">
              <label for="form_cp">C.P</label>
              <input id="form_cp" name="form_cp" class="form-control" type="text" placeholder="CP">
            </div>
            <div class="form-group col-md-8">
              <label>Ville</label>
              <input id="form_town" name="form_town"  class="form-control" type="text" placeholder="Ville">
            </div>
            
        </div>
        <div class="form-group col-md-6">
            <div class="form-group col-md-12">
                <img id="verifiedCard" alt="" src="images/paiement/verification_by_visa.jpg">
            </div>
            <div class="form-group col-md-10">
              <label for="form_nameCB">Titulaire de la carte *</label>
              <input id="form_nameCB" name="form_nameCB" class="form-control" type="text" placeholder="Nom figurant sur la carte">
            </div>
            <div class="form-group col-md-10">
              <label>Numéro de carte *</label>
              <input id="form_nCB" name="form_nCB" class="form-control" type="text" placeholder="N° de carte en cours de validité">
            </div>
            <div class="form-group col-md-7">
                <label>Date d'expiration *</label>
                <div id="selectDate" style=" display: inline-flex" >
                    <select id="form_exCBM" name="form_exCBM" name="exCB_month"  class="form-control" >
                      <option value="jan">Janvier</option>
                      <option value="fev">fevrier</option>
                      <option value="mars">Mars</option>
                      <option value="avr">Avril</option>
                      <option value="mai">Mai</option>
                      <option value="jun">Juin</option>
                      <option value="jul">Juillet</option>
                      <option value="aou">Aout</option>
                      <option value="sep">Septembre</option>
                      <option value="oct">Octobre</option>
                      <option value="nov">Novembre</option>
                      <option value="dec">Decembre</option>                              
                    </select>
                    <select id="form_exCBY" name="form_exCBY" name="exCB_year"  class="form-control">
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                    </select>                       
                </div>
            </div>                
            <div class="form-group col-md-4">
                <label>V-Code *<img id="crypto" alt="" src="images/paiement/picto.png"></label>
                <input id="form_crCB" name="form_crCB" class="form-control" type="text" placeholder="Crp">
            </div>
        </div>
       
        
        
    </div>
    <p class="text-center">*selectionner tototerjhgpinizeqkrgln</p>
    
   <div class="row">
       <div class="col-md-1">
       </div>
       <div class="col-md-10 text-center">
           <label>
        <input type="checkbox" value="checkCG"> J'accepte les conditions générales et confirme avoir l'âge minimum légal.
    </label>
    <div class="form-group">
        <button class="btn btn-dark btn-lg btn-block" type="submit">Commander</button>
        <button type="button" class="btn btn-default " data-dismiss="modal">Quitter</button>
    </div>
       </div>
       <div class="col-md-1">
       </div>
       
        </div>
</form>
            </section>
            
<script src="js/range.js"></script>