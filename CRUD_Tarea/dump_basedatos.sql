/*
	CRUD con PostgreSQL y PHP
*/

-- PASO 1)  CREAR BASE DE DATOS:   db_univalle

CREATE TABLE tarea_crud(
	id serial primary key,
	nombre varchar(50) NOT NULL,
	apellido varchar(50) NOT NULL,
	cedula varchar(50) NOT NULL,
	usuario varchar(50) NOT NULL,
	estado varchar(50) NOT NULL,
	contrasena varchar(50) NOT NULL,
	rol varchar(50) NOT NULL
);

insert into tarea_crud(nombre, apellido, cedula, usuario, estado, contrasena, rol) 
values('Anderson', 'Castaneda','8455525562','andirson','Activo','ander123','Administrador');

insert into tarea_crud(nombre, apellido, cedula, usuario, estado, contrasena, rol) 
values('Homero', 'Simpson','1122334455','jsimpson','Inactivo','ouch123','Usuario');

insert into tarea_crud(nombre, apellido, cedula, usuario, estado, contrasena, rol)
values('Edward', 'Elric','4589652354','enanito22','Inactivo','Windy22','Usuario');

insert into tarea_crud(nombre, apellido, cedula, usuario, estado, contrasena, rol) 
values('Tatiana', 'Trujillo','8854622011','tata88','Activo','dino3223','Administrador');
