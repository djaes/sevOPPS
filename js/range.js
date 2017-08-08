(function () {

    var selector = '[data-rangeSlider]',
      elements = document.querySelectorAll(selector);
    

    // Example functionality to demonstrate a value feedback
    function valueOutput(element) {
      var value = element.value,
        output = element.parentNode.getElementsByTagName('output')[0];
        if(element.id == "size")output.innerHTML = value + " Métres";
        if(element.id == "weight")output.innerHTML = value + " kilos";
        var imc = document.getElementById('weight').value/(document.getElementById('size').value * document.getElementById('size').value) ;
        //console.log(imc);
        switch (true) {
                case (imc <= 18.0) :
                    document.getElementById('imcSituation').innerHTML = "Maigreur ou dénutrition";
                    document.getElementById('imcSituation_img').src = "images/IMC/IMC-18.png";
                    break;
                case (imc <= 25.0):
                    document.getElementById('imcSituation').innerHTML = "Corpulence normale";
                    document.getElementById('imcSituation_img').src = "images/IMC/imc-ideal.png";
                    break;
                case (imc <= 30.0):
                    document.getElementById('imcSituation').innerHTML = "Surpoids";
                    document.getElementById('imcSituation_img').src = "images/IMC/imc-25-30.png";
                    break;
                case (imc <= 35.0):
                    document.getElementById('imcSituation').innerHTML = "Obésité modérée";
                    document.getElementById('imcSituation_img').src = "images/IMC/imc-30-35.png";
                    break;
                case (imc <= 40.0):
                   document.getElementById('imcSituation_img').src = "images/IMC/imc-35+.png";
                    document.getElementById('imcSituation').innerHTML = "Obésité élevé";
                    break;
                default:
                    document.getElementById('imcSituation_img').src = "images/IMC/imc-35+.png";
                    document.getElementById('imcSituation').innerHTML = "Obésite massive ";
                    break; 
               }
    }

    for (var i = elements.length - 1; i >= 0; i--) {
      valueOutput(elements[i]);
    }

    Array.prototype.slice.call(document.querySelectorAll('input[type="range"]')).forEach(function (el) {
      el.addEventListener('input', function (e) {
        valueOutput(e.target);
      }, false);
    });
    
  })();