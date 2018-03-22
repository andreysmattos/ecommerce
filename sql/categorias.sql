/* Categorias do ecommerce */

CREATE DATABASE `loja_t`;

USE `loja_t`;


/* Essa categoria vai o nome do servidor */
CREATE TABLE `categoria_mae` (
	idCategoriaMae int not null primary key auto_increment,
	nome varchar(80) not null,
	ativo ENUM('s', 'n') not null
);


/* essa categoria vai o tipo de produto */
CREATE TABLE `categoria_filho` (
	idCategoriaFilho int not null primary key auto_increment,
	nome varchar(80) not null,
	ativo ENUM('s', 'n') not null,
	id_categoria_mae int not null,
	foreign key (id_categoria_mae) 
	references categoria_mae(idCategoriaMae)
);



CREATE TABLE `produto` (
	idProduto int not null primary key auto_increment,
	nome varchar(30) not null,
	preco decimal(7,2) not null,
	precoPromo decimal(7,2) not null,
	descricao varchar(254) not null,
	imagem char(8),
	ativo ENUM('s','n') not null,
	estoque int not null,
	id_categoria_filho int not null,
	foreign key (id_categoria_filho)
	references categoria_filho (idCategoriaFilho)
);

/* SELECT MENU */

SELECT idCategoriaFilho, nome, 
(SELECT count(*) FROM `produto` where `id_categoria_filho` =  idCategoriaFilho) as quantidade
 FROM `categoria_filho` 
WHERE ativo = 's' AND id_categoria_mae = 3

/* INSERT categoria mae */

INSERT INTO `categoria_mae` (nome, ativo) VALUES ('Aurera', 's');
INSERT INTO `categoria_mae` (nome, ativo) VALUES ('Megatibia', 's');
INSERT INTO `categoria_mae` (nome, ativo) VALUES ('Unitera', 's');


/* INSERT categoria filho */

INSERT INTO `categoria_filho` (nome, ativo, id_categoria_mae) VALUES ('escudos', 's', 1);
INSERT INTO `categoria_filho` (nome, ativo, id_categoria_mae) VALUES ('espadas', 's', 1);
INSERT INTO `categoria_filho` (nome, ativo, id_categoria_mae) VALUES ('armaduras', 's', 1);

INSERT INTO `categoria_filho` (nome, ativo, id_categoria_mae) VALUES ('capacete', 's', 2);
INSERT INTO `categoria_filho` (nome, ativo, id_categoria_mae) VALUES ('armaduras', 's', 2);

INSERT INTO `categoria_filho` (nome, ativo, id_categoria_mae) VALUES ('sapato', 's', 3);
INSERT INTO `categoria_filho` (nome, ativo, id_categoria_mae) VALUES ('armaduras', 's', 3);

/* INSERT produtos*/


/* ID CATEGORIA MAE 1*/
INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Dwarven Shield', 3, 2.5, 'Um escudo criado por anões', 'sdsd', 's', 8, 1);
INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Guardian Shield', 1, 0.5, 'um ótimo escudo', 'sdsd', 's', 2, 1);
INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Brass Shield', 9, 7.35, 'Escudo forjado a fogo', 'sdsd', 's', 12, 1);

INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Serpent Sword', 3, 2.5, 'Espada com veneno', 'sdsd', 's', 80, 2);
INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Spike Sword', 1, 0.5, 'Era boa em rook, mas nunca existiu', 'sdsd', 's', 21, 2);
INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Long Sword', 9, 7.35, 'Espada grande', 'sdsd', 's', 2, 2);

INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Brass Armor', 3, 2.5, 'armadura de fogo', 'sdsd', 's', 6, 3);
INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Golden Armor', 1, 0.5, 'banhado a ouro', 'sdsd', 's', 1, 3);
INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Plate Armor', 9, 7.35, 'Dropa de amazon', 'sdsd', 's', 842, 3);



/* ID CATEGORIA MAE 2*/

INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Cruzader Helmet', 3, 2.5, 'Espada com veneno', 'sdsd', 's', 2, 4);
INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Magic Helmet', 1, 0.5, 'Era boa em rook, mas nunca existiu', 'sdsd', 's', 21, 4);
INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Capacte de motocross', 9, 7.35, 'Espada grande', 'sdsd', 's', 200, 4);

INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Cruzader Armor', 3, 2.5, 'armadura de fogo', 'sdsd', 's', 60, 5);
INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Amazon Armor', 1, 0.5, 'banhado a ouro', 'sdsd', 's', 1, 5);
INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Plate Armor', 9, 7.35, 'Dropa de amazon', 'sdsd', 's', 62, 5);


/* ID CATEGORIA MAE 3*/

INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Boots of Haste', 3, 2.5, 'Espada com veneno', 'sdsd', 's', 999, 6);
INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Soft Boots', 1, 0.5, 'Era boa em rook, mas nunca existiu', 'sdsd', 's', 201, 6);
INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Leather Boots', 9, 7.35, 'Espada grande', 'sdsd', 's', 9999, 6);

INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Brass Armor', 3, 2.5, 'armadura de fogo', 'sdsd', 's', 62, 7);
INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Chain Armor', 1, 0.5, 'banhado a ouro', 'sdsd', 's', 122, 7);
INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Plate Armor', 9, 7.35, 'Dropa de amazon', 'sdsd', 's', 88, 7);
INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho)
VALUES ('Blue Robe', 1, 0.5, 'armadura azul', 'dasfdfds', 's', 95, 7);

