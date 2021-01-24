function addBol() {
  let bol = document.createElement('div');
  bol.setAttribute("class", "bola");

  positonOne = Math.floor(Math.random() * 500);
  positonTwo = Math.floor(Math.random() * 400);

  bol.setAttribute("style", `left:${positonOne}px; top:${positonTwo}px;`);
  colorRand(bol);

  bol.setAttribute("onclick", "toBurst(this)");
  
  document.body.appendChild(bol);  
}

function toBurst(element) {
  document.body.removeChild(element);  
}

function start() {
  setInterval(addBol, 1000);
}

function colorRand(element) {
  let colorOne = Math.floor(Math.random() * 255);
  let colorTwo = Math.floor(Math.random() * 255);
  let colorThree = Math.floor(Math.random() * 255);
  element.style.backgroundColor = `rgb(${colorOne}, ${colorTwo}, ${colorThree})`;
}