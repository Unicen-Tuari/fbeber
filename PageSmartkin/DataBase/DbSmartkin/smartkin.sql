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
(1,1,'Dibujos Animados'),(2,1,'Peliculas'),(3,1,'Comics'),(4,1,'Musica'),(5,1,'Automoviles');

INSERT INTO smartkin.coleccion (id_coleccion, id_categoria, nombre_coleccion, img_coleccion) VALUES
(1,1,'La Pantera Rosa','lapanterarosa.jpeg'),(2,1,'Popeye','popeye.jpeg'),(3,1,'Cars','cars.jpeg'),(4,1,'Mickey','mickey.jpeg'),(5,1,'Dora la exploradora','doralaexploradora.jpeg'),
(6,2,'Los Minions','losminions.jpeg'),(7,2,'La era del hielo', 'laeradelhielo.jpeg'),(8,2,'los juegos del hambre','losjuegosdelhambre.jpeg'),(9,2,'Crepusculo','crepusculo.jpeg'),(10,2,'up','up.jpeg'),
(11,3,'Batman','batman.jpeg'),(12,3,'Superman','superman.jpeg'),(13,3,'Spiderman','spiderman.jpeg'),(14,3,'La mujer maravilla', 'lamujermaravilla.jpeg'),(15,3,'linterna verde','linternaverde.jpeg'),
(16,4,'nightwish','nightwish.jpeg'),(17,4,'rata blanca','ratablanca.jpeg'),(18,4,'ntvg','ntvg.jpeg'),(19,4,'Perota chingo','perotachingo.jpeg'),(20,4,'los noocheros','losnocheros.jpeg'),
(21,5,'ferrari','ferrari.jpeg'),(22,5,'fito','fito.jpg'),(23,5,'chevy','chevy.jpeg'),(24,5,'citroen','citroen.jpeg'),(25,5,'camiones','camiones.jpeg');

INSERT INTO smartkin.modelo (id_modelo, id_coleccion, nombre_modelo, img_modelo) VALUES
(1,1,'pantera1','pantera1.jpeg'),(2,1,'pantera2','pantera2.jpeg'),(3,1,'pantera3','pantera3.jpeg'),
(4,2,'popeye1','popeye1.jpeg'),(5,2,'popeye2','popeye2.jpeg'),(6,2,'popeye3','popeye3.jpeg'),
(7,3,'cars1','cars1.jpeg'),(8,3,'cars2','cars2.jpeg'),(9,3,'cars3','cars3.jpeg'),
(10,4,'mickey1','mickey1.jpeg'),(11,4,'mickey2','mickey2.jpeg'),(12,4,'mickey3','mickey3.jpeg'),
(13,5,'doralaexploradora1','doralaexploradora1.jpeg'),(14,5,'doralaexploradora2','doralaexploradora2.jpeg'),(15,5,'doralaexploradora3','doralaexploradora3.jpeg'),
(16,6,'losminions1','losminions1.jpeg'),(17,6,'losminions2','losminions2.jpeg'),(18,6,'losminions3','losminions3.jpeg'),
(19,7,'laeradelhielo1','laeradelhielo1.jpeg'),(20,7,'laeradelhielo2','laeradelhielo2.jpeg'),(21,7,'laeradelhielo3','laeradelhielo3.jpeg'),
(22,8,'losjuegosdelhambre1','losjuegosdelhambre.jpeg'),(23,8,'losjuegosdelhambre2','losjuegosdelhambre2.jpeg'),(24,8,'losjuegosdelhambre3','losjuegosdelhambre3.jpeg'),
(25,9,'crepusculo1','crepusculo1,jpeg'),(26,9,'crepusculo2','crepusculo2.jpeg'),(27,9,'crepusculo3','crepusculo3.jpeg'),
(28,10,'up1','up1.jpeg'),(29,10,'up2','up2.jpeg'),(30,10,'up3','up3.jpeg'),
(31,11,'batman1','batman1.jpeg'),(32,11,'batman2','batman2.jpeg'),(33,11,'batman3','batman3.jpeg'),
(34,12,'superman1','superman1.jpeg'),(35,12,'superman2','superman2.jpeg'),(36,12,'superman3','superman3.jpeg'),
(37,13,'spiderman1','spiderman1.jpeg'),(38,13,'spiderman2','spiderman2.jpeg'),(39,13,'spiderman3','spiderman3.jpeg'),
(40,14,'lamujermaravilla1','lamujermaravilla1.jpeg'),(41,14,'lamujermaravilla2','lamujermaravilla2.jpeg'),(42,14,'lamujermaravilla3','lamujermaravilla3.jpeg'),
(43,15,'linternaverde1','linternaverde1.jpeg'),(44,15,'linternaverde2','linternaverde2.jpeg'),(45,15,'linternaverde3','linternaverde3.jpeg'),
(46,16,'nightwish1','nightwish1.jpeg'),(47,16,'nightwish2','nightwish2.jpeg'),(48,16,'nightwish3','nightwish3.jpeg'),
(49,17,'ratablanca1','ratablanca1.jpeg'),(50,17,'ratablanca2','ratablanca2.jpeg'),(51,17,'ratablanca3','ratablanca3.jpeg'),
(52,18,'ntvg1','ntvg1.jpeg'),(53,18,'ntvg2','ntvg2.jpeg'),(54,18,'ntvg3','ntvg3.jpeg'),
(55,19,'perotachingo1','perotachingo1.jpeg'),(56,19,'perotachingo2','perotachingo2.jpeg'),(57,19,'perotachingo3','perotachingo3.jpeg'),
(58,20,'losnocheros1','losnocheros1.jpeg'),(59,20,'losnocheros2','losnocheros2.jpeg'),(60,20,'losnocheros3','losnocheros3.jpeg'),
(61,21,'ferrari1','ferrari1.jpeg'),(62,21,'ferrari2','ferrari2.jpeg'),(63,21,'ferrari3','ferrari3.jpeg'),
(64,22,'fito1','fito1.jpeg'),(65,22,'fito2','fito2.jpeg'),(66,22,'fito3','fito3.jpeg'),
(67,23,'chevy1','chevy1.jpeg'),(68,23,'chevy2','chevy2.jpeg'),(69,23,'chevy3','chevy3.jpeg'),
(70,24,'citroen1','citroen1.jpeg'),(71,24,'citroen2','citroen2.jpeg'),(72,24,'citroen3','citroen3.jpeg'),
(73,25,'camiones1','camiones1.jpeg'),(74,25,'camiones2','camiones2.jpeg'),(75,25,'camiones3','camiones3.jpeg');


INSERT INTO smartkin.dispositivo (id_dispositivo, id_modelo, nombre_dispositivo, img_dispositivo) VALUES
