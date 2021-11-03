const url =
    'http://localhost/desenvolvimento_full-stack/Curso_JavaScript/upload_images/';
const button = document.querySelector('button');

async function enviaArq() {
    const [file] = document.querySelector('input[type=file').files;
    const body = new FormData();
    body.append('title', 'Titulo do arquivo');
    body.append('arquivo', file);

    const response = await fetch(url, {
        method: 'POST',
        body: body,
    });

    const json = await response.text(); // se o dado que voltar for um json, ele converte esse json em JS de novo
    console.log(json.substring(1, 16));
    setReq(json)
}

function setReq(req) {
  let parser = new DOMParser();
  let doc = parser.parseFromString(req, "text/html");
  console.log(doc);
  let file = doc.getElementById('file');
  console.log(file);

  //let reader = new FileReader();
  
  
  /*console.log(req.split('>'))
  let arrayBody = req.split('>');
  let inputString = arrayBody[13]+' />';
  let el = inputString;
  console.log(el);*/

  let img = document.querySelector('img');
  //img.setAttribute('src', req.name);
}

button.addEventListener('click', enviaArq);

 /*let button = document.querySelector('button');

async function enviaArq() {
  let file = document.querySelector('input[type=file').files[0];
  let url = "http://localhost/desenvolvimento_full-stack/Curso_JavaScript/upload_images/index.html";
  let body = new FormData(); // criado o obj formData
  body.append("title", "Titulo do arquivo");
  body.append("arquivo", file);  // aqui esta adicionando o arquivo ao corpo da requisição
  let bodyReq = {
    method: "POST",
    body: {
      title: "Titulo do arquivo",
      arquivo: file
    },
    // headers é como se fosse o remetente da 'carta' no caso a requisição
    headers: {
      "content-type": "multipart/form-data",
    }
  }
  let bodyString = JSON.stringify(bodyReq);
  console.log(bodyString);
  console.log(bodyReq.body.arquivo);

  let req = await fetch(url, bodyReq)
  let json = await req.text()
  console.log(json);
}*/
/*
function setImg(json) {
  let img = document.querySelector('img');
  console.log(json);
  img.setAttribute('src', `${json}`)
}*/

/*
button.addEventListener('click', enviaArq);*/