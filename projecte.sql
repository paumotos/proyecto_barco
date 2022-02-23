/* Guille Mendoza || Pau Motos */
DROP DATABASE projecteBarca;
CREATE DATABASE projecteBarca;
USE projecteBarca;

CREATE TABLE tb_usuaris 
(id_usuari INT PRIMARY KEY AUTO_INCREMENT, 
Nom VARCHAR (25),
Usuari VARCHAR (15),
Cognom VARCHAR (20),
Data_naixament DATE,
Gmail VARCHAR(50),
Contrasenya VARCHAR (10)
);

