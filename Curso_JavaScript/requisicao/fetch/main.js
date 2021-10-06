const button = document.querySelector('button');

function totalPost() {
  document.querySelector(".res").innerHTML = "Carregando...";
  let url = 'https://jsonplaceholder.typicode.com/photos'
  // retorna uma promise
  fetch(url)
    .then( (res) => { // pega a promise e retorna um json
      return res.json();
    })
    .then( (json) => { // trata esse json com a função
      mostrarPhotos(json);
    })
    .catch( (err) => {
      console.log("Usando o catch");
      document.querySelector('.res').innerHTML = err;
    })
}

function mostrarPhotos(json) {
  setTimeout(() => {
    document.querySelector('.res').innerHTML = '';
    json.forEach( (item, index) => {
      let figure = document.createElement('figure');
      let legenda = document.createElement('figcaption');
      let img = document.createElement('img');
      
      if(index < 10) {
        document.body.append(figure);
        figure.appendChild(legenda);
        figure.appendChild(img);
        legenda.textContent = item.title;
        img.setAttribute('src', item.url);
      }
    });
  }, 2000);
  
}

button.addEventListener('click', totalPost);