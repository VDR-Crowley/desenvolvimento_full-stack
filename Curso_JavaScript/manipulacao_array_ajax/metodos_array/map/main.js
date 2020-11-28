let lista = new Array(2, 80, 45)

let lista2 = []

let lista3 = []

lista2 = lista.map(function(item) {
  return item * 2
})

lista3 = lista.filter(function(item) {
  if(item > 20) {
    return true
  } else {
    return false
  }
})


console.log(lista2)
console.log(lista3)