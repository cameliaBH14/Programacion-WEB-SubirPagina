CREATE DATABASE PracticaLogin;

USE PracticaLogin;

CREATE TABLE Login(idUser int not null auto_increment primary key,
Nombre varchar(15) not null,
Usuario varchar(10) not null,
Contraseña varchar(10) not null);

select * from Login;