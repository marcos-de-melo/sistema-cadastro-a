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

insert into tbusuarios (
nomeUsuario,
emailUsuario,
dataNascUsuario,
senhaUsuario,
obsUsuario
) values (
'Marcos de Melo',
'marcdmelo@gmail.com',
'1976-10-25',
'123',
'blabla bla'
),(
'Juliana Melo',
'juliana@gmail.com',
'1985-08-20',
'123',
'blabla bla'
),(
'Nicoly Melo',
'nicolymelo@gmail.com',
'2006-09-15',
'123',
'blabla bla'
);
