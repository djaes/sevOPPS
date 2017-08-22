<select id="selectForm">
    <option value="formulContact">Contactez nous</option>
    <option value="formulRetract">Formulaire de retractation</option>
</select>
<hr>
<form id="formulRetract" name="retractForm" class="cacheDiv register-form form-transparent" method="post" action="BDD/retractForm.php"  style="margin: 20px;" onsubmit="return valider(this)">
    <div class="" >
        <h3 class="box">Formulaire de rétractation</h3>
    </div>
    <div class="">
        <p>Le présent formulaire doit être complété et renvoyé uniquement si le Client souhaite se rétracter de la commande passée sur ”BIOACTIVFIT ” sauf exclusions ou limites à l'exercice du droit de rétractation suivant les Conditions Générales de Vente applicables.</p>
    </div>
    <div class="retracte">
        <ul>        
            <li>
                <p>
                    <label for="retract_date">Commande du :</label>
                    <input id="dateRetract" name="retract_date" type="text" required placeholder=" 01/01/2017">
                    </p>
            </li>
            <li>
                <p>
                <label for="retract_nCmd">N° de la commande :</label>
                <input id="nCmdRetract" name="retract_nCmd" type="text" required placeholder=" 000000000"><br>
                </p>
            </li>
            <li>
                <p>
                <label for="retract_name">Nom du Client :</label>        
                <input id="nameRetract" name="retract_name" type="text" required placeholder=" Votre nom">
                    </p>
            </li>
            <li>
                <p>
               <label for="retract_address">Adresse du Client :</label>
            <input id="addressRetract" name="retract_address" type="text" required placeholder=" Votre adresse"> 
                </p>
            </li>
            <li>
                <p>
               <label for="retract_addressMail">Adresse mail du Client :</label>
            <input id="addressMailRetract" name="retract_addressMail" type="text" required placeholder=" Votre adresse mail"> 
                </p>
            </li>
            <hr>
            
            <li>
              <label for="commentsRetract">Message de retractation : </label>

            </li>
              <li>
                <textarea style="border: 1px solid #000;" cols="100" rows="5" name="commentsRetract" required placeholder=" Votre message"></textarea>  
              </li>
            <li>
                <p>
                
                <input type="checkbox" name="retract_checkSign" required value="checkSign" > J'accepte les conditions générales et confirme avoir l'âge minimum légal.
                
                </p>
            </li>
        </ul>
        <hr>
    </div>
    <div class="" >
        <input type="submit" class="btn btn-dark btn-lg btn-block" value="Envoyer">
    </div>
</form>


<form id="formulContact" name="retractForm" class="montreDiv register-form form-transparent" method="post" action="BDD/contactForm.php"  style="margin: 20px;" onsubmit="return valider(this)">        
<div class="">
    <h3 class="box">Formulaire de Contact</h3>
  </div>
  <div class="contacte">
      <ul>        
        <li>
          <p>
            <label for="first_name">Prénom : </label>
            <input  type="text" name="first_name" required placeholder=" John" />
            </p>
         </li>
          <li>
              <p>
            <label for="last_name">Nom : </label>
            <input  type="text" name="last_name" required placeholder=" Smith" />
                  </p>
        </li>      
        <li>
            <p>
            <label for="email">email : </label>
            <input type="email" name="email" required placeholder=" john.smith@gmail.com" />
          </p>
        </li>
        
                
        <li><div class="divider"></div></li>
          <hr>
        <li>
          <label for="comments">Message : </label>
          
        </li>
          <li>
            <textarea style="border: 1px solid #000;" cols="100" rows="5" name="comments" required placeholder=" Votre message"></textarea>  
          </li>
        <hr>
        <li>
            
          <input type="submit" class="btn btn-dark btn-lg btn-block" value="Envoyer">
        </li>
        
      </ul>
    </div>
    
    </form>  
  
<script type="text/javascript">
		$(document).ready(function(){
			$("#selectForm").change(function(){
				var id = $("option:selected", this).val();
 
				$(".montreDiv").removeClass("montreDiv").addClass("cacheDiv");
				$("#"+id).removeClass("cacheDiv").addClass("montreDiv");
			});
		});
	</script>