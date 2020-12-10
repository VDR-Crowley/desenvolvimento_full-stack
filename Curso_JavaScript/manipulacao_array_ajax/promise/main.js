function falar() {
  let promise = new Promise( (resolver, reject) => {
    setTimeout( () => {
      resolver('OK');
    }, 3000);
  });

  return promise;
}

falar().then((resposta) => {
  console.log(resposta)
})