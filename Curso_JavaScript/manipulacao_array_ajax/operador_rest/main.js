function adicionar(nome, ...nomes) { // rest
  let novoConjunto = [
    // spread
    ...nome,
    ...nomes
  ];

  return novoConjunto;
}

let nomes = ['Vando', 'Reis'];
let outros = adicionar(nomes, 'Vini', 'BIBI');

console.log(outros)