let timer;

function comecar() {
  timer = setInterval(showTime, 1000);
}

function parar() {
  clearInterval(timer);
}

function showTime() {
  let data = new Date();
  let hora = data.getHours();
  let minutos = data.getMinutes();
  let segundos = data.getSeconds();

  let texto = hora+':'+minutos+':'+segundos;

  let demo = document.querySelector('.demo');

  demo.innerHTML = texto;
}

setTimeout(function(){
  alert('Rodou!!')
}, 3000) 
