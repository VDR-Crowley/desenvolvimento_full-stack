
const pesas = ['Freios', 'Carburador']

let res = pesas.join('-')

let pedido = document.querySelector('#demo')

pedido.innerHTML = pesas.join(' e ')

pesas.push('Bateria')




let andaArray = ''

for(let i in pesas) {
  andaArray += pesas[i]
}

andaArray = pesas.join(' , ')

let j = document.querySelector('.array').innerHTML = andaArray
