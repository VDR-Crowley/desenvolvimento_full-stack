$j = jQuery.noConflict();

$j( document ).ready(function() {
  alert('Jquery na variavel J');
})


jQuery(document).ready(function() {
  console.log('Outra forma de evitar conflito');
})