let button = document.querySelector('button');
let area = document.querySelector('#area');
button.addEventListener('click', () => {  
  let res = prompt('Qual o nome da area');

  area.innerHTML = res;
});
