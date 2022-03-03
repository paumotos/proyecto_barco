var contador = 0;

var imagenes = [
  "../img/barco1.jpg",
  "../img/barco2.jpeg",
  "../img/barco3.png",
  "../img/barco4.png",
  "../img/barco5.png",
];

$(function () {
  setInterval(changeImage, 2000);
});

function changeImage() {
  $("main").css("background-image= url('" + imagenes[contador] + "')");
  console.log("BARCO " + (contador + 1));
  contador++;

  if (contador == 5) contador = 0;
}
