CREATE TABLE IF NOT EXISTS tb_restaurantes(
	id int auto_increment NOT NULL primary key,
	nome varchar(40) NOT NULL,
	cidade varchar(30) NOT NULL,
	endereco varchar(40) NOT NULL,
	telefone varchar(11) NOT NULL
)default charset utf8;