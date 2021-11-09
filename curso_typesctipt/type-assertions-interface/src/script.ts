interface Pessoa {
  nome: HTMLInputElement;
  idade: HTMLInputElement | string | number;
}
let User: Pessoa = {
  nome: document.getElementById('nome') as HTMLInputElement,
  idade: document.getElementById('idade') as HTMLInputElement
}
let recarregar = document.getElementById('rec');
let form = document.getElementById('form');
function summitEvent(event) {
  let resposta = document.getElementById('res');
  let nome: string = String(User.nome.value);
  let idade: number;
  if(typeof User.idade != 'number' && typeof User.idade != 'string') idade = Number(User.idade.value);
  event.preventDefault();
  resposta.innerHTML = `<br>Nome: ${nome}<br>`;
  resposta.innerHTML += `Idade: ${idade}`;
}
form.addEventListener('submit', summitEvent);
recarregar.addEventListener('click', () => {
  document.location.reload();
})