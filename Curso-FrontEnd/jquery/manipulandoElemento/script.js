$('document').ready(function() {

  let input = $('input');

  let button = $('button');

  let ul = $('ul');

  input.before('Item da lista: ');

  button.on('click', function(){
    ul.append(`<li>${input.val()}</li>`);
    input.val("");
  });
  
});