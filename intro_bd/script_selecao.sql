-- Buscar registros

-- Buscar todos os registros
select * from editoras;

-- Buscar todos os registros definindo os campos a ser exibidos
select nome from editoras;

-- Buscar todas as informações de um único registro
select * from editoras where codigo_editora = 3;

-- Buscar todos as editoras que tem Comics no nome
select * from editoras where nome like "%Comics%";

