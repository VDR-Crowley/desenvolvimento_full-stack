function printDestring( [ B, a, n, ...rest ] ) {
  console.log(rest.join("")+ n + a + B);
}

const frutas = ["Banana", "Pera"];

//printDestring("Banana");

const [ ,pera ] = frutas;

let newPera = pera.split("");
/*
console.log(newPera);
let p = '';

newPera.forEach(item => {
  p += item;
});

console.log(p);
*/

console.log("For of");
for(let i of frutas) {
  console.log(i);
}

console.log("For in");
for(let i in frutas) {
  console.log(i);
}
