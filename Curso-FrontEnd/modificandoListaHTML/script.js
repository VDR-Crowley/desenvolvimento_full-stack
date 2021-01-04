// pegar o button
let button = document.querySelector('button');


function adicionaLista() {
  // pegar o valor do campo
  let campo = document.querySelector('#campo').value;
  // pegar o valor de area
  let lista = document.querySelector('#area').innerHTML;
  // pegar lista
  let newLista = document.querySelector('#area');
  // itemLista vai receber itemLista + li com o campo preenchido
  lista += `<li>${campo}</li>`;

  newLista.innerHTML = lista;
}


button.addEventListener('click', adicionaLista);