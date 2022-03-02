var contador = 0;

var imagenes = ["../img/", "../img/", "../img/", "../img/", "../img/"];

$(function () {
  setInterval(changeImage, 2000);
});

function changeImage() {
  $("main").css("background-image", "url(" + imagenes[index] + ")");

  contador++;

  if (contador == 4) contador = 0;
}
