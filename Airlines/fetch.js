$('#viewflights').change(function(){
 $.getJSON(
 'fetch.php',
 'brand='+$('#viewflights').val(),
 function(result){
 $('#item').empty();
 $.each(result.result, function(){
 $('#item').append('<option>'+this['item']+'</option>');
 });
 }
 );
});