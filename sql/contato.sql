/* Tabela do formulario de contato */

CREATE TABLE `contato` (
	idContato int not null primary key auto_increment,
	nome varchar(100),
	email varchar(255),
	mensagem varchar(255),
	data timestamp default current_timestamp
);