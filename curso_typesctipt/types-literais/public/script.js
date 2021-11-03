var res = document.getElementById('res');
var nome = "Vando"; // typo literal, deve conter Vando
function sexo(s) {
    if (s === 'M') {
        return true;
    }
    else {
        return false;
    }
}
var p = "F";
var pessoa = sexo(p) ? "masculino" : "Feminino";
console.log(pessoa);
// Exemplo de uso
function alignText(texto, props) {
    return "<div style=\"text-align:" + props + "\">" + texto + "</div>";
}
res.innerHTML = alignText('Vando', "center");
