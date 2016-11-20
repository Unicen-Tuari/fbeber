create table actividad(
	id int(10) not null AUTO_INCREMENT,
	nombre varchar(50) not null,
	descripcion varchar(300) not null,
	constraint pk_actividad primary key (id)
	);

create table profesor(
	id int(10) not null AUTO_INCREMENT,
	email varchar(200) not null,
	pass varchar(50) not null,
	is_admin boolean not null default '1',
	apyno varchar(50) not null,
	dni int(10) not null,
	foto varchar(300) not null,
	horarios varchar(300),
	descripcion varchar(300),
	id_act int(10) not null,
	constraint pk_profesor primary key (id),
	constraint fk_profesor foreign key (id_act) references actividad (id) on delete cascade on update cascade
);

create table img_actividad(
	id int(10) not null AUTO_INCREMENT,
	foto varchar (300) not null,
	id_act int (10) not null,
	constraint pk_img primary key (id),
	constraint fk_img foreign key (id_act) references actividad(id) on delete cascade on update cascade
);

create table usuario(
	id int(10) not null AUTO_INCREMENT,
	email varchar(200) not null,
	pass varchar(50) not null,
	apyno varchar(50) not null,
	constraint pk_usuario primary key (id)
);

create table comentario(
	id int(10) not null AUTO_INCREMENT,
	comentario varchar (140) not null,
	puntaje int(1) not null,
	id_usuario int(10) not null,
	id_act int(10) not null,
	constraint pk_comentario primary key (id),
	constraint fk_comentario foreign key (id_usuario) references usuario (id) on delete cascade on update cascade,
	constraint fk_comentario1 foreign key (id_act) references actividad (id) on delete cascade on update cascade
);

create table inscripcion(
	id int(10) not null AUTO_INCREMENT,
	id_usuario int(10) not null,
	id_act int(10) not null,
	constraint pk_inscripcion primary key (id),
	constraint fk_inscripcion foreign key (id_usuario) references usuario (id) on delete cascade on update cascade,
	constraint fk_inscripcion1 foreign key (id_act) references actividad (id) on delete cascade on update cascade
);


/*llenado de tablas*/
insert into actividad (id,nombre, descripcion) values
	(1,'none','none'),
	(2,'Tae Box','El Tae Bo es una rutina de ejercicios asociada al boxeo y al taekwondo. Se combina la música con ejercicios intensivos'),
	(3,'Pilates', 'Pilates, es un sistema de entrenamiento físico y mental creado a principios del siglo XX por Joseph Hubertus Pilates'),
	(4,'Yoga', 'La palabra Yoga significa “unión”. Primero unión con uno mismo, en la integración de todas las capas y estratos que componen la estructura personal.'),
	(5,'Cross fit', ' sistema de acondicionamiento físico basado en ejercicios constantemente variados, con movimientos funcionales'),
	(6,'Zumba', 'enfocada por una parte a mantener un cuerpo saludable y por otra a desarrollar, fortalecer y dar flexibilidad al cuerpo mediante movimientos de baile combinados con una serie de rutinas aeróbicas');

	
insert into img_actividad(foto,id_act) values
	('zumba.jpg',6),('zumba2.jpg',6),('zumba3.jpg',6),
	('taebox.jpg',2),('taebox2.jpg',2),('taebox3.jpg',2),
	('pilates.jpg',3),('pilates2.jpg',3),('pilates3.jpg',3),
	('yoga.jpg',4),('yoga2.jpg',4),('yoga3.jpg',4),
 	('crossfit.jpg',5),	('crossfit2.jpg',5),('crossfit4.jpg',5);

insert into profesor (id,email,pass,is_admin,apyno,dni,foto,horarios,descripcion,id_act) values
	(1,'admin@admin.com','admin','0','Administrador','12345678','default.jpg','none','none',1),
	(2,'pepe@gmail.com','pepe','1','Pepe Flores','546472466','perfil1.jpg','lunes y martes de 14 a 15','profesor de bla bla bla',2);

insert into usuario(email, pass,apyno) values
	('flor@gmail.com','flor', 'Florencia Beber');

insert into inscripcion(id_usuario,id_act) values
	(1,2);


