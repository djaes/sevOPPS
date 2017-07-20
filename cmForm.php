<section class="background modal-header" style="border-radius: 50px;box-shadow: inset 0 0 60px #cbf031, 0 0 5px #abc502;">
    <div class="" name="">
        <div class="row" style="margin: 0;" >

        <div class="text-center mb-12"><a href="#" class=""><img id="logoCMD" alt="" src="images/logo-favicon/logo_500X150.png"></a>
        </div>
    </div>
</div>
<div class="row">
    <form class="imc" name="imc";>
        <div class="form-group col-md-8 bordered imc-range">
            <p style="text-align: center;">Votre situation à partir de l'IMC:</p>
            <div>
                <label for="form_size">Taille</label> 
                <input type="range" id="size" name="size" value="1.55" min="1.10" max="2.10" step="0.01" data-show-value="true"><output>1.55 Métres</output>
            </div>

            <div>
                <label for="form_weight">Poid</label>
                <input type="range" id="weight" name="weight" value="60" min="40" max="100" step="1" data-show-value="true"><output>60 kilos</output>
            </div>
        </div>

        <div class="form-group col-md-3 bordered imc-calcul">
            <label id="imcSituation" class="no-background">Corpulence normale</label>
            <br>
            <img id="imcSituation_img" src="images/IMC/ideal.png">
        </div>    
  </form>
</div>
      </section>

<div class="modal-body" style="padding: 30px;">
    <section class="commandForm" style="border-radius: 30px;padding-top: 10px">
    <form id="cmdForm" name="cmdForm" class="register-form form-transparent" method="post" action="BDD/formulaire.php"  style="margin: 20px;" onsubmit="return valider(this)">

    <div class="row">

        <div class="form-group col-md-6">
            <div class="form-group col-md-6">
              <label for="form_prenom">Prénom *</label>
              <input id="form_prenom" name="form_prenom" class="form-control" type="text" placeholder="Prénom">
            </div>
            <div class="form-group col-md-6">
              <label for="form_name">Nom *</label>
              <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Nom">
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
                    <select id="form_exCBM" name="form_exCBM" name="exCB_month"  class="form-control">
                      <option value="janvier">Janvier</option>
                      <option value="fevrier">Fevrier</option>
                      <option value="mars">Mars</option>
                      <option value="avril">Avril</option>
                      <option value="mai">Mai</option>
                      <option value="juin">Juin</option>
                      <option value="juillet">Juillet</option>
                      <option value="aout">Aout</option>
                      <option value="septembre">Septembre</option>
                      <option value="octobre">Octobre</option>
                      <option value="novembre">Novembre</option>
                      <option value="decembre">Decembre</option>                              
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
    </section>
</div>

<script src="js/range.js"></script>
<script src="js/checkForm.js"></script>
