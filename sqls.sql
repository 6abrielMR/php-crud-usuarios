create database taller;
use taller;

create table usuarios(
    id int(20) not null,
    nombres varchar(255) not null,
    apellidos varchar(255) not null,
    constraint pk_usuarios primary key(id)
)engine = InnoDb;