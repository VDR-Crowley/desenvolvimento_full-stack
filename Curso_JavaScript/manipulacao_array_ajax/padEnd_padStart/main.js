// Utilizando o padStart
const cartao = '25689364864';

let ultimateNumbers = cartao.slice(-4);

let cartaoMantasma = ultimateNumbers.padStart(11, '*');

console.log("Esses são os 4 ultimos digitos do seu cartao: "+cartaoMantasma);

// Utilizando o padEnd

ultimateNumbers = cartao.slice(0, 4);

cartaoMantasma = ultimateNumbers.padEnd(11, '*');

console.log('Esses são os 4 primeiros digitos do seu cartão: '+cartaoMantasma);