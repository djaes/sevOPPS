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
                case (imc <= 16.0) :
                    document.getElementById('imcSituation').value = "Anorexie ou dénutrition"
                    break;
                case (imc <= 18.0) :
                    document.getElementById('imcSituation').value = "Maigreur"
                    break;
                case (imc <= 25.0):
                    document.getElementById('imcSituation').value = "Corpulence normale "
                    break;
                case (imc <= 30.0):
                    document.getElementById('imcSituation').value = "Surpoids"
                    break;
                case (imc <= 35.0):
                    document.getElementById('imcSituation').value = "Obésité modérée"
                    break;
                case (imc <= 40.0):
                    document.getElementById('imcSituation').value = "Obésité élevé"
                    break;
                default:
                    document.getElementById('imcSituation').value = "Obésite massive "
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


    
    // Example functionality to demonstrate programmatic value changes
    var changeValBtn = document.querySelector('#js-example-change-value button');
    changeValBtn.addEventListener('click', function (e) {
      var inputRange = changeValBtn.parentNode.querySelector('input[type="range"]'),
        value = changeValBtn.parentNode.querySelector('input[type="number"]').value,
        event = document.createEvent('Event');

      event.initEvent('change', true, true);

      inputRange.value = value;
      inputRange.dispatchEvent(event);
    }, false);

    // Example functionality to demonstrate programmatic buffer set
    var stBufferBtn = document.querySelector('#js-example-buffer-set button');
    stBufferBtn.addEventListener('click', function (e) {
      var inputRange = stBufferBtn.parentNode.querySelector('input[type="range"]'),
        value = stBufferBtn.parentNode.querySelector('input[type="number"]').value;

      inputRange.rangeSlider.update({buffer: value});
    }, false);

    // Example functionality to demonstrate destroy functionality
    var destroyBtn = document.querySelector('#js-example-destroy button[data-behaviour="destroy"]');
    destroyBtn.addEventListener('click', function (e) {
      var inputRange = destroyBtn.parentNode.querySelector('input[type="range"]');
      console.log(inputRange);
      inputRange.rangeSlider.destroy();
    }, false);

    var initBtn = document.querySelector('#js-example-destroy button[data-behaviour="initialize"]');

    initBtn.addEventListener('click', function (e) {
      var inputRange = initBtn.parentNode.querySelector('input[type="range"]');
      rangeSlider.create(inputRange, {});
    }, false);

    //update range
    var updateBtn1 = document.querySelector('#js-example-update-range button');
    updateBtn1.addEventListener('click', function (e) {
      var inputRange = updateBtn1.parentNode.querySelector('input[type="range"]');
      inputRange.rangeSlider.update({min: 0, max: 20, step: 0.5, value: 1.5, buffer: 70});
    }, false);


    var toggleBtn = document.querySelector('#js-example-hidden button[data-behaviour="toggle"]');
    toggleBtn.addEventListener('click', function (e) {
      var container = e.target.previousElementSibling;
      if (container.style.cssText.match(/display[\s:]{1,3}none/)) {
        container.style.cssText = '';
      } else {
        container.style.cssText = 'display: none;';
      }
    }, false);

    // Basic rangeSlider initialization
    rangeSlider.create(elements, {

      // Callback function
      onInit: function () {
      },

      // Callback function
      onSlideStart: function (value, percent, position) {
        console.info('onSlideStart', 'value: ' + value, 'percent: ' + percent, 'position: ' + position);
      },

      // Callback function
      onSlide: function (value, percent, position) {
        console.log('onSlide', 'value: ' + value, 'percent: ' + percent, 'position: ' + position);
      },

      // Callback function
      onSlideEnd: function (value, percent, position) {
        console.warn('onSlideEnd', 'value: ' + value, 'percent: ' + percent, 'position: ' + position);
      }
    });

    
  })();