create database dbsistemacadastro;

use dbsistemacadastro;

create table tbusuarios(
    idUsuario int not null primary key auto_increment,
    nomeUsuario varchar(100),
    emailUsuario varchar(100),
    dataNascUsuario date,
    senhaUsuario varchar(100),
    obsUsuario text
);