const button = document.querySelector('button');
button.addEventListener('click', getAlbuns);

async function getAlbuns() {
  try {
    let url = "https://jsonplaceholder.typicode.com/users/1/albums";
    let req = await fetch(url)
    let json = await req.json();
    printAlbuns(json);
  } catch (erro) {
    console.log("Erro na aplicação: "+erro);
  }
}

function printAlbuns(albuns) {
  let res = document.querySelector('.res');
  let html = '';
  print(albuns, html, res);
}

function print(list, html, res) {
  for(let i in list) {
    html += `<br><strong>Album:</strong> <em>${list[i].title}</em><br>`;
  }
  res.innerHTML = html;
}