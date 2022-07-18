-- Criação de um novo banco de dados
create database if not exists livraria;
-- Usar o novo banco de dados
use livraria;
-- Criar as tabelas do banco de dados
create table if not exists autores(
	codigo_autor tinyint,
    nome varchar(30) not null,
    primary key(codigo_autor)
);
create table if not exists editoras(
	codigo_editora tinyint,
    nome varchar(30) not null,
    primary key(codigo_editora)
);
create table if not exists livros(
	isbn smallint,
    titulo varchar(50) not null,
    ano_de_lancamento smallint not null,
    codigo_editora tinyint not null,
    primary key(isbn),
    constraint fk_codigo_editora foreign key (codigo_editora) references editoras(codigo_editora)
);
create table if not exists livros_autores(
	livro_isbn smallint,
    codigo_autor tinyint,
    primary key(livro_isbn,codigo_autor),
    constraint fk_livro_autor foreign key (livro_isbn) references livros (isbn),
    constraint fk_codigo_autor foreign key (codigo_autor) references autores(codigo_autor)
);