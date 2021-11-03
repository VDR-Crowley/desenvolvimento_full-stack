/*
Typando objs
/*?
define que o parametro é opcional
atalho para barra pra cima: | = alt + 124
para pra cima separa os tipos permitidos de determinada variavel
*/
function resumo(user) {
    if (user.idade !== undefined) {
        return "Ol\u00E1 " + user.nome + " voc\u00EA tem " + user.idade + " anos";
    }
    else {
        return "Ol\u00E1 " + user.nome;
    }
}
var user = {
    nome: "Vando"
};
console.log(resumo(user));
