let button = document.querySelector("button");

button.addEventListener("click", inseriPost);

async function inseriPost() {
  document.querySelector(".res").innerHTML = "Enviando...";
  let url = "https://jsonplaceholder.typicode.com/posts";
  let req = await fetch(url, {
    method: "POST",
    body: JSON.stringify({
      title: "Um titulo de teste",
      body: "Usando um texto para realizar esse teste",
      userId: 4
    }),
    headers: {
      'Content-type': 'application/json; charset=UTF-8',
    },
  });
  let json = await req.json();
  document.querySelector(".res").innerHTML = "Enviado!";
  console.log(json);
}