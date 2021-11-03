/* tipando variaveis */
//let nome: string = "Vando Dos reis";
//let age: number = 20;
//let jobs: string[] = ["ADS", "Dev Front-end"];
/*
console.log(nome);
console.log(age);
console.log(jobs[0]);
console.log(jobs[1]);
*/
// Primeiro modo de pegar a primeira letra de um array
/*function firstLetterUppercase(name: string) {
  let firstLetter = name.charAt(0).toUpperCase();
  return firstLetter+name.substring(1);
}*/
//console.log(firstLetterUppercase("vando"));

// especificando tipo do retorno da função
function firstLetterUppercase(name: string): string {
  let letters = name.split("");
  let [ firstLetter ] = letters;
  let upperLetter = firstLetter.toUpperCase();
  letters.shift();
  letters.unshift(upperLetter);
  return letters.join("");
}
let nome = firstLetterUppercase('vando dos reis')
console.log(nome);

function somar(n1: number, n2: number): number {
  return n1+n2;
}
let soma = somar(20, 52);
console.log(soma);
