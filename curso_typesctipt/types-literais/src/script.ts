let res = document.getElementById('res');
let nome: "Vando" = "Vando"; // typo literal, deve conter Vando

// Exemplo de uso
type Sexo = true | false;
function sexo(s: string): Sexo {
  if(s === 'M') {
    return true;
  } else {
    return false;
  }
}
let p = "F";
let pessoa = sexo(p) ? "masculino" : "Feminino";
console.log(pessoa);

// Exemplo de uso
type Align = "right" | "left" | 'center';
function alignText(texto: string, props: Align) {
  return `<div style="text-align:${props}">${texto}</div>`;
}
res.innerHTML = alignText('Vando', "center");