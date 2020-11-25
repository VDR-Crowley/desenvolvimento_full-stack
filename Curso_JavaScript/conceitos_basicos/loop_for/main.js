// Loop for
// Loop for arrey


let carros = new Array('Fusca', 'Uno', 'Palio', 'Celta');
let html = '<ul>'


for(let i in carros) {
  html += '<li>'+ carros[i] +'</li>'
}

html += '</ul>'

document.getElementById('texto').innerHTML = html