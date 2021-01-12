const numberUser = Number(document.getElementById('numberTwo').value);

let numberOne = document.querySelector('.numberOne');
let button = document.querySelector('a');

function numberRand() {
  let number = Math.random() * 50;
  return Math.floor(number);
}

function checksOperation() {
  let rand = numberRand();
    
  if(numberUser == rand) {
    numberOne.innerHTML = numberUser;
    alert('Você Acertou: '+rand);
  } 
  else {
    alert('Errou!! Tente Novamente');
    alert('Numero certo: '+rand);
  }
  
  numberUser = ''
  location.reload();
}

button.addEventListener('click', checksOperation);


