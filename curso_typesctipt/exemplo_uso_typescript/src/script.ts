/* Exemplo de uso necessario do typescript */

let num1 = document.getElementById("number1") as HTMLInputElement
let num2 = document.getElementById("number2") as HTMLInputElement
let button = document.querySelector("button")
let res = document.querySelector(".res")

function calcular(n1: number, n2: string) {
  return n1 + n2;
}

button.addEventListener("click", () => {
  res.innerHTML = calcular(+num1.value, +num2.value).toString();
});