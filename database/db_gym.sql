create table actividad(
	id int(10) not null AUTO_INCREMENT,
	nombre varchar(50) not null,
	foto varchar(300) not null,
	descripcion varchar(300) not null,
	constraint pk_actividad primary key (id)
	);

create table profesor(
	id int(10) not null AUTO_INCREMENT,
	nombre varchar(50) not null,
	apellido varchar(50) not null,
	dni int(10) not null,
	foto varchar(300) not null,
	horarios varchar(300),
	descripcion varchar(300),
	id_act int(10) not null,
	constraint pk_profesor primary key (id),
	constraint fk_profesor foreign key (id_act) references actividad (id) on delete cascade on update cascade
);

insert into actividad (nombre, foto, descripcion) values
	('Zumba', 'zumba.jpg', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. '),
	('Tae Box', 'taebox.jpg', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. '),
	('Pilates', 'pilates.jpg', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. '),
	('Yoga', 'yoga.jpg', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. '),
	('Cross fit', 'crossfit.jpg', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. ');

insert into profesor (nombre, apellido, dni, foto, horarios, descripcion, id_act) values
	('Pedro', 'Flores', '1236586425','perfil1.jpg', 'de lunes a viernes de 16hs a 19hs', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.','1'),
	('Ramona', 'Gia', '4565436564','perfil2.jpg', 'de lunes a viernes de 16hs a 19hs', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.','2'),
	('Coca', 'Sanchez', '47545847','perfil3.jpg', 'de lunes a viernes de 16hs a 19hs', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.','1');
