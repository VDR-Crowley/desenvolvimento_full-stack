let button = document.querySelector('button');
let img = document.createElement('img'); 

function setImage() {
  let fileImage = document.getElementById('file').files[0];

  let blob = URL.createObjectURL(fileImage)  
  img.src = blob;
  img.alt = "Peril";

  document.querySelector('.res').appendChild(img);
}

// URL.revokeObjectURL(img);

button.addEventListener('click', setImage)