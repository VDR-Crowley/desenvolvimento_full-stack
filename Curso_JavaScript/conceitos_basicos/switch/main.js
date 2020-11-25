let titulo = document.getElementById('titulo');

const dia = 4
let hoje = ''

switch (dia) {
  
  case 0:
    hoje = titulo.innerHTML = 'Hoje é domingo'
    break;
  case 1:
    hoje = titulo.innerHTML = 'Hoje é Segunda'
    break;
  case 2:
    hoje = titulo.innerHTML = 'Hoje é Terça'
    break;
  case 3:
    hoje = titulo.innerHTML = 'Hoje é Quarta'
    break;
  case 4:
    hoje = titulo.innerHTML = 'Hoje é Quinta'
    break;
  case 5:
    hoje = titulo.innerHTML = 'Hoje é Sexta'
    break;
  case 6:
    hoje = titulo.innerHTML = 'Hoje é Sabado'
    break;

}
