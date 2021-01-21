let input = document.querySelector('input');

function getKeyPress(event) {
  if(event.keyCode == 13) 
  {
    console.log(`Enviar`);
  }
}
input.addEventListener('keypress', getKeyPress);

function getKeyDown(event) {
  console.log(`Tecla pressionada: `+event.keyCode);
}

input.addEventListener('keydown', getKeyDown);

function getKeyUp(event) {
  console.log(`Tecla soltada: `+event.keyCode);
}

input.addEventListener('keyup', getKeyUp);