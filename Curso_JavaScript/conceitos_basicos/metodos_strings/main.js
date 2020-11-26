let nome = 'Vando dos Reis'

console.log( nome.length ) // length vai mostrar quantos caracteres tem um string

let resultado = ''

if(nome.indexOf('Reis') > -1) {
  resultado = 'Achou!'
  console.log(resultado)
} else {
  resultado = 'Não achou!'
  console.log(resultado)
}