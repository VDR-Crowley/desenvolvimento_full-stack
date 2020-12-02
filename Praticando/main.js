function clicou() {

  const valor = (min, max) => {
    const valor = Math.random() * (max - min) + min
    return Math.floor(valor)
  }

  let res = document.querySelector('div')

  res.innerText = valor(0, 50)
}