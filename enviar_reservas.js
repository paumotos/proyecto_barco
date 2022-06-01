// Connect to de database and send the reservation
mysql = require("mysql");
var connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "root",
  database: "proyecto_barco",
});

connection.query("SELECT * FROM tb_usuarios", function (err, results, fields) {
  if (err) throw err;
  results.forEach((a) => {
    console.log(a);
  });
});

connection.end();
