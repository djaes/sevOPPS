<form class="" name="imc";>
  <div class="row pb-30 pt-10">
        <div class="col-md-1">
      </div>
        <div id="imc" class="col-md-7" style="">
            <div class="bloc_center" style="">
                Calculons votre IMC(Indice de Masse Corporel) selon vos données:
            </div>
            <div>
                <label for="form_size">Taille</label> 
                <input type="range" id="size" name="size" value="1.55" min="1.10" max="2.10" step="0.01" data-show-value="true"><output>1.55 Métres</output>
            </div>
            <div>
                <label for="form_weight">Poid</label>
                <input type="range" id="weight" name="weight" value="65" min="40" max="100" step="1" data-show-value="true"><output>60 kilos</output>
            </div>
        </div>
        
        <div id="imc-calcul" class="col-md-3 bordered">
            <label id="imcSituation" class="bloc_center no-background"> Surpoid</label>
            <img class="bloc_center" id="imcSituation_img" src="images/IMC/surpoid.png">
            
        </div>
    </div>
  </form>
