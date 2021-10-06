let people = [ "Vando", "Vinicius", "Viviane", "Claudia"];

function print(person) {
  console.log("hello "+person);
}

function forEach(callback, array) {
  for(let i = 0; i < array.length; i++) {
    callback(array[i], i);
  }
}

forEach(print, people);