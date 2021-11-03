let button = document.querySelector('button');

function showImage() {
  let reader = new FileReader();
  let image = document.getElementById('file').files[0];

  reader.onloadend = () => {
    let img = document.createElement('img');
    img.src = reader.result;
    document.querySelector('.res').appendChild(img);
  }

  reader.readAsDataURL(image);
}

button.addEventListener('click', showImage)