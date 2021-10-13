let input = document.querySelector('input');
let button = document.querySelector('button');

function users() {
  document.querySelector('.loading').style.display = 'block';
  document.querySelector('.res').innerHTML = '';

  let url = "https://jsonplaceholder.typicode.com/users";
  let users = fetch(url);

  users.then( response => response.json())
  .then( json => {
    document.querySelector('.loading').style.display = 'none';
    usuarios(json);
  })
}

function usuarios(json) {
  let user = '';
  json.forEach((item) => {
    if(input.value == item.id) {
      input.value = '';
      user += "<br>Name: "+item.name;
      user += "<br>E-mail: "+item.email;
      user += "<br>Phone: "+item.phone;
      user += "<br>Rua:"+item.address.street;
      user += "<br>Cidade: "+item.address.city;
    }
  });

  document.querySelector('.res').innerHTML = user;
}

button.addEventListener('click', users);