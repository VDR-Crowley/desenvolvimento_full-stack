let form = document.querySelector('form');
let input = document.getElementById('nome');
let res = document.getElementById('res');
let button = document.getElementById('button');

let div = document.querySelector("div");

button.addEventListener("click", function() {
  if(input.value != '') {
    alert("Enviado");
  } else {
    event.preventDefault();
    div.innerHTML = "O input esta vazio";
  }
})