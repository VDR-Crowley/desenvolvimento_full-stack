var User = {
    nome: document.getElementById('nome'),
    idade: document.getElementById('idade')
};
var recarregar = document.getElementById('rec');
var form = document.getElementById('form');
function summitEvent(event) {
    var resposta = document.getElementById('res');
    var nome = String(User.nome.value);
    var idade = Number(User.idade.value);
    event.preventDefault();
    resposta.innerHTML = "<br>Nome: " + nome + "<br>";
    resposta.innerHTML += "Idade: " + idade;
}
form.addEventListener('submit', summitEvent);
recarregar.addEventListener('click', function () {
    document.location.reload();
});
