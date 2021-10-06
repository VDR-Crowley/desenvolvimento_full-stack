function temperatura() {
  return new Promise(function (resolve, reject) {
    console.log("Carregando...");
    setTimeout(function () {
      resolve("Pagina foi carregada com sucesso!");
    }, 2000);
  });
}

let temp = temperatura();
temp.then(function (resposta) {
  console.log(resposta);
})  // not use ; in line
  .catch(function (err) {
    console.log("Pagina não pode ser carregada!!");
  });