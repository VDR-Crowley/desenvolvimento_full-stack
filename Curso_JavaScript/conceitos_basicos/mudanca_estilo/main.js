function azul() {
  limpa()
  document.getElementById('titulo').classList.add('azul')
}

function vermelho() {
  limpa()
  document.getElementById('titulo').classList.add('vermelho')
}

function verde() {
  limpa()
  document.getElementById('titulo').classList.add('verde')
}

function limpa() {
  document.getElementById('titulo').classList.remove('azul')
  document.getElementById('titulo').classList.remove('vermelho')
  document.getElementById('titulo').classList.remove('verde')
}

function mostra(elemento) {
  elemento.style.display = 'none'
  document.getElementById('menu').style.display = 'block'
}