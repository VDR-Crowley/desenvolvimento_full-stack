function requisitar() {
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
}

//requisitar();

async function requisitar2() {
  const url = 'https://alunos.b7web.com.br/api/ping';
  const params = {
    method: 'POST',
    body:JSON.stringify({
      nome:'Vando',
      sobrenome: 'Reis'
    })
  };

  const resposta = await fetch(url, params);
  const json = await resposta.json();

  console.log(json);
}

requisitar2();