/*ESQUEMA*/ 

CREATE SCHEMA smartkin;

/*TABLAS*/

DROP TABLE if exists smartkin.usuario cascade;
CREATE TABLE smartkin.usuario(
	id_usuario int NOT NULL AUTO_INCREMENT,
	is_admin bool NOT NULL,
	email varchar(250) NOT NULL,
	telefono int (20),
	direccion varchar (200),
	nombre_usuario varchar(25) NOT NULL,
	contrasenia varchar(150) NOT NULL,
	PRIMARY KEY (id_usuario)
);

DROP TABLE if exists smartkin.categoria cascade;
CREATE TABLE smartkin.categoria(
	id_categoria int NOT NULL AUTO_INCREMENT,
	id_usuario int NOT NULL,
	nombre_categoria varchar (20) NOT NULL,
	PRIMARY KEY (id_categoria)
);

DROP TABLE if exists smartkin.coleccion cascade;
CREATE TABLE smartkin.coleccion (
	id_coleccion int NOT NULL AUTO_INCREMENT,
	id_categoria int NOT NULL,
	nombre_coleccion varchar (250) NOT NULL,
	img_coleccion varchar (500) NOT NULL,
	me_gusta bool,
	PRIMARY KEY (id_coleccion)
);

DROP TABLE if exists smartkin.modelo cascade;
CREATE TABLE smartkin.modelo (
	id_modelo int NOT NULL AUTO_INCREMENT,
	id_coleccion int NOT NULL,
	nombre_modelo varchar (250) NOT NULL,
	img_modelo varchar (500) NOT NULL,
	me_gusta bool,
	PRIMARY KEY (id_modelo)
);

DROP TABLE if exists smartkin.dispositivo cascade;
CREATE TABLE smartkin.dispositivo (
	id_dispositivo int NOT NULL AUTO_INCREMENT,
	id_modelo int NOT NULL,
	nombre_dispositivo varchar (250) NOT NULL,
	img_dispositivo varchar (500) NOT NULL,
	me_gusta bool,
	PRIMARY KEY (id_dispositivo)
);

/*RESTRICCIONES*/
ALTER TABLE smartkin.categoria
  ADD CONSTRAINT fk_categoria
  FOREIGN KEY (id_usuario) REFERENCES smartkin.usuario (id_usuario);

ALTER TABLE smartkin.coleccion
  ADD CONSTRAINT fk_coleccion
  FOREIGN KEY (id_categoria) REFERENCES smartkin.categoria (id_categoria);

ALTER TABLE smartkin.modelo
  ADD CONSTRAINT fk_modelo
  FOREIGN KEY (id_coleccion) REFERENCES coleccion (id_coleccion);

ALTER TABLE smartkin.dispositivo
  ADD CONSTRAINT fk_dispositivo
  FOREIGN KEY (id_modelo) REFERENCES smartkin.modelo (id_modelo);

/*INSERTS*/

INSERT INTO smartkin.usuario (id_usuario, is_admin, contrasenia, nombre_usuario, email, telefono, direccion) VALUES
(1, 1, 'admin', 'admin', 'florenciadaianabeber@gmail.com', 0123456789, 'Calle Falsa 123');

INSERT INTO smartkin.categoria (id_categoria, id_usuario, nombre_categoria)VALUES 
(1, 1, 'categoria1'), 
(2, 1, 'categoria2'), 
(3, 1, 'categoria3');

INSERT INTO smartkin.coleccion (id_coleccion, id_categoria, nombre_coleccion, img_coleccion) VALUES
(1, 1, 'coleccion1', 'coleccion1.jpg'),
(2, 1, 'coleccion2', 'coleccion2.jpg'),
(3, 2, 'coleccion3', 'coleccion3.jpg'),
(4, 2, 'coleccion4', 'coleccion4.jpg'),
(5, 3, 'coleccion5', 'coleccion5.jpg'),
(6, 3, 'coleccion6', 'coleccion6.jpg');

INSERT INTO smartkin.modelo (id_modelo, id_coleccion, nombre_modelo, img_modelo) VALUES
(1, 1, 'modelo1', 'modelo1.jpg'),
(2, 1, 'modelo2', 'modelo2.jpg'),
(3, 2, 'modelo3', 'modelo3.jpg'),
(4, 2, 'modelo4', 'modelo4.jpg'),
(5, 3, 'modelo5', 'modelo5.jpg'),
(6, 3, 'modelo6', 'modelo6.jpg'),
(7, 4, 'modelo7', 'modelo7.jpg'),
(8, 4, 'modelo8', 'modelo8.jpg'),
(9, 5, 'modelo9', 'modelo9.jpg'),
(10, 5, 'modelo10', 'modelo10.jpg'),
(11, 6, 'modelo11', 'modelo11.jpg'),
(12, 6, 'modelo12', 'modelo12.jpg');

INSERT INTO smartkin.dispositivo (id_dispositivo, id_modelo, nombre_dispositivo, img_dispositivo) VALUES
(1, 1, 'dispositivo1', 'dispositivo1.jpg'),
(2, 2, 'dispositivo2', 'dispositivo2.jpg'),
(3, 3, 'dispositivo3', 'dispositivo3.jpg'),
(4, 4, 'dispositivo4', 'dispositivo4.jpg'),
(5, 5, 'dispositivo5', 'dispositivo5.jpg'),
(6, 6, 'dispositivo6', 'dispositivo6.jpg'),
(7, 7, 'dispositivo7', 'dispositivo7.jpg'),
(8, 8, 'dispositivo8', 'dispositivo8.jpg'),
(9, 9, 'dispositivo9', 'dispositivo9.jpg'),
(10, 10, 'dispositivo10', 'dispositivo10.jpg'),
(11, 11, 'dispositivo11', 'dispositivo11.jpg'),
(12, 12, 'dispositivo12', 'dispositivo12.jpg');
