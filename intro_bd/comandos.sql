-- Mostrar todos os bancos de dados
show databases;
-- Seleciona o banco de dados
use escola;
-- Mostrar todos as tabelas do banco selecionado
show tables;
-- Descrever a estrutura da tabela
describe autores;
set foreign_key_checks = 0;
-- Alteração da estrutura de uma tabela
alter table autores modify column codigo_autor tinyint not null auto_increment;
alter table editoras modify column codigo_editora tinyint not null auto_increment;
set foreign_key_checks = 1;
