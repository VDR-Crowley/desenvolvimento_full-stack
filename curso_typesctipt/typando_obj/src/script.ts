/* 
Typando objs 
/*? 
define que o parametro é opcional
atalho para barra pra cima: | = alt + 124
para pra cima separa os tipos permitidos de determinada variavel
*/

function resumo(user: {nome: string, idade?: number | string} ) {
  if(user.idade !== undefined) {
    return `Olá ${user.nome} você tem ${user.idade} anos`;
  } else {
    return `Olá ${user.nome}`;
  }
}

let user = {
  nome: "Vando"
}
console.log(resumo(user));