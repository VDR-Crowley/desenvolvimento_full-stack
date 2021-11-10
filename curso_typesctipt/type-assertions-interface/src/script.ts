interface Pessoa {
  nome: HTMLInputElement;
  idade: HTMLInputElement | string | number;
}
let User: Pessoa = {
  nome: document.getElementById('nome') as HTMLInputElement,
  idade: document.getElementById('idade') as HTMLInputElement
}
let recarregar = document.getElementById('rec') as HTMLElement;
let form = document.getElementById('form') as HTMLFormElement;
function summitEvent(event: Event) {
  let resposta = document.getElementById('res') as HTMLElement;
  let nome: string = String(User.nome.value);
  let idade: number = 0;
  if(typeof User.idade != 'number' && typeof User.idade != 'string') idade = Number(User.idade.value);
  event.preventDefault();
  resposta.innerHTML = `<br>Nome: ${nome}<br>`;
  resposta.innerHTML += `Idade: ${idade}`;
}
form.addEventListener('submit', summitEvent);
recarregar.addEventListener('click', () => {
  document.location.reload();
})