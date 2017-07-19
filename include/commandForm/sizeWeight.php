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
