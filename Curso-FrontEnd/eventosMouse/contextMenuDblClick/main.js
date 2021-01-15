let button = document.querySelector('.button');

button.addEventListener('contextmenu', () => {
  console.log('Click with button right');
});

// dessa forma cancela o evento padrão do mouse com o botão direito
//button.oncontextmenu = () => {
  //return false
//}

button.addEventListener('dblclick', () => {
  button.style.backgroundColor = '#896547';
});