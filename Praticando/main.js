const botao = document.getElementsByTagName('button')[0];

botao.onclick = function clicou() {
  window.open(' http://www.imdb.com')
}

const botao2 = document.getElementsByTagName('button')[1];

// Para Browser mais antigos
// botao2.attachEvent() - IE8 e anteriores
botao2.addEventListener('click', () => {
  alert('Clicou');
});