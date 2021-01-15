let button = document.querySelector('button');

button.onmousedown = () => {
  console.log('Precionou o mouse');
};


button.addEventListener('mouseup', () => {
  console.log('Subiu o mouse');
});