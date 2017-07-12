$(function(){
  var val = $('#weight').val();
    output  = $('#output_weight');
 
  output.html(val);
 
  $('#weight').change(function(){
      output.html(this.value);
  });
 
});