$(functionSize(){
  var val = $('#size').val();
    output  = $('#output_size');
 
  output.html(val);
 
  $('#size').change(function(){
      output.html(this.value);
  });
 
});

$(functionWeight(){
  var val = $('#weight').val();
    output  = $('#output_weight');
 
  output.html(val);
 
  $('#weight').change(function(){
      output.html(this.value);
  });
 
});