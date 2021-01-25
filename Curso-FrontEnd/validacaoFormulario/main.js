function validar() {

  let campoValue = document.getElementById('campo').value;

  if(campoValue.length > 2) {
    return false;
  }
  else {
    return true;
  }
}