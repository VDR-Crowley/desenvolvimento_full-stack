let url = 'https://alunos.b7web.com.br/api/ping';
let params = {
  method: 'POST',
  body:JSON.stringify({
    nome:'Vando',
    sobrenome: 'Reis'
  })
};

fetch(url, params)
  .then((resposta) =>  resposta.json())
  .then( (json) => {
    console.log(json)
  });