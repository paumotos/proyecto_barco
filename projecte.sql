/* Guille Mendoza || Pau Motos */
DROP DATABASE proyectoBarca;
CREATE DATABASE proyectoBarca;
USE proyectoBarca;

CREATE TABLE tb_usuarios 
(id_usuario INT PRIMARY KEY AUTO_INCREMENT, 
Nombre VARCHAR (25),
Usuario VARCHAR (15),
Apellido VARCHAR (20),
Fecha_Nacimiento DATE,
Gmail VARCHAR(50),
Contrasenya VARCHAR (15)
);


INSERT INTO tb_usuarios VALUES
(1,"Guille","gmendo","Mendoza","2001-05-07","gmendo@gmail.com","P@ssw0rd"),
(2,"Pau","pmotos","Motos","2001-02-01","pmotos@gmail.com","P@ssw0rd");
