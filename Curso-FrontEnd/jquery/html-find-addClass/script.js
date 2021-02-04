$('document').ready(function() {

  $('h2').html('Modificando string do h2');

  $('ul').html('<h3>adicionando um novo elemento via jquery</h3>');

  $('ul').find('h3').addClass('color');
  
});