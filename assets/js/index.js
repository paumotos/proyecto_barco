var contador = 0;

var imagenes = [
  "../img/barco1.jpg",
  "../img/barco2.jpeg",
  "../img/barco3.png",
  "../img/barco4.png",
  "../img/barco5.png",
];

$(function () {
  // setInterval(changeImage, 2000);
});

function changeImage() {
  $("main").css("background-image= url('" + imagenes[contador] + "')");
  // console.log("BARCO " + (contador + 1));
  contador++;

  if (contador == 5) contador = 0;
}

// function reserva() {
//   // Primero nos conectaremos a la BBDD llamada proyectoBarco para obtener los datos de la tabla reserva
//   mysql.connect(
//     {
//       host: "localhost",
//       user: "root",
//       password: "root",
//       database: "proyectoBarco",

//       // Si no se puede conectar a la BBDD, mostramos un mensaje de error
//       connectionLimit: 10,
//       connectTimeout: 10000,
//       acquireTimeout: 10000,
//       timeout: 10000,
//       multipleStatements: true,
//       debug: false,
//     },
//     function (err) {
//       if (err) {
//         console.log("Error: " + err);
//       } else {
//         console.log("Conexión a la BBDD correcta");
//         // Luego, obtenemos los datos de la tabla reserva
//         mysql.query("SELECT * FROM reserva", function (err, result) {
//           if (err) {
//             console.log("Error: " + err);
//           } else {
//             console.log("Datos de la tabla reserva obtenidos");
//             console.log(result);
//           }
//         });
//       }
//     }
//   );
// }

function reserva() {
  // Primero accederemos con ayax a la BBDD llamada proyectoBarco para obtener los datos de la tabla reserva
  $.ajax({
    url: "reserva.php",
    type: "POST",
    succes: function (data) {
      console.log(data);
    },
  });
}
