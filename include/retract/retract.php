<form name="retractForm" class="register-form form-transparent" method="post" action="BDD/retractForm.php"  style="margin: 20px;" onsubmit="return valider(this)">
    <div class="" >
        <h3 class="box">Formulaire de rétractation</h3>
    </div>
    <div class="">
        <p>Le présent formulaire doit être complété et renvoyé uniquement si le Client souhaite se rétracter de la commande passée sur ”BIOACTIVFIT ” sauf exclusions ou limites à l'exercice du droit de rétractation suivant les Conditions Générales de Vente applicables.</p>
    </div>

    <div class="">
        A l'attention de Kedaweb<br>
    </div>
    
    <div class="" >
        <label>Commande du :</label>
        <input id="dateRetract" name="retract_date" class="form-control" type="text" required placeholder="01/01/2017">
    </div>
    <div class="">
        <label>Numéro de la commande :</label>
        
        <input id="nCmdRetract" name="retract_nCmd" class="form-control" type="text" required placeholder="000000000"><br>    
    </div>

    <div class="">
        <label>Nom du Client :</label>        
        <input id="nameRetract" name="retract_name" class="form-control" type="text" required placeholder="Votre nom">
    </div>
    <div class="">
        <label>Adresse du Client :</label>
        <input id="addressRetract" name="retract_address" class="form-control" type="text" required placeholder="Votre adresse">
    </div>
    <hr>
    <div class="">
        <input type="checkbox" name="retract_checkSign" value="checkSign"> J'accepte les conditions générales et confirme avoir l'âge minimum légal.
    </div>
    <hr>
    <div class="" >
        <input type="submit" class="btn btn-dark btn-lg btn-block" value="Envoyer">
    </div>
</form>