let button = document.querySelector('.button');

button.addEventListener('mouseover', () => {
  button.style.backgroundColor = "red";
});

button.addEventListener('mouseout', () => {
  button.style.backgroundColor = "#CCC";
});