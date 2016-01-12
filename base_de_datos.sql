CREATE DATABASE congresos;

\c congresos

create domain dom_curp char(18) constraint valida_curp check(value~'^[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9]{2}$');

CREATE TABLE administrador (usuario text constraint pk_administrador primary key, contrasena text);

CREATE TABLE congreso (id_congreso text constraint pk_congresos primary key, nombre_congreso text, fec_ini date, fec_fin date);

CREATE TABLE organizador (usuario text constraint pk_organizador primary key, contrasena text, id_congreso text, constraint fk_organizador foreign key (id_congreso) references congreso(id_congreso) on delete cascade on update cascade);

CREATE TABLE integrante (curp dom_curp constraint pk_informacion_basica primary key, nombre text, appellido_paterno text, appellido_materno text, edad smallint, sexo varchar(1), correo text, fecha_registro date);

insert into congreso values ('tekhne_2015', 'Tekhne 2015', '12/10/2015', '15/10/2015');