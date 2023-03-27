create schema estoque;
use estoque;


create table item(
	id int not null,
    nome varchar(60) not null,
    descricao varchar(100) not null,
    valor decimal(10,2) not null,
    quant_estoque float not null,
    familia varchar(30) not null,
    primary key(id)
);

insert item values(null, "Parafuso","3/8",1.0,10,"Parafusos");


create table usuario(
	id int not null auto_increment, 
    nome varchar(60) not null,
    tipo int not null,
    email varchar(60) not null unique,
    senha varchar(100) not null,
    primary key(id)    
);


select * from usuario;
