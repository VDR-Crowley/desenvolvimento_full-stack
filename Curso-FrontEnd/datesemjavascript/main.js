let days = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'];

let currentDay = new Date();

console.log(days[currentDay.getDay()]);

console.log(`${currentDay.getDay()}/${currentDay.getMonth() + 1}/${currentDay.getFullYear()}`)