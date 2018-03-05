<?php
require_once '../../vendor/autoload.php';

use App\banco\Conn;


function desc($str){
	if(mb_strlen($str) > 55)
		return substr($str, 0, 55) . '...';
	return $str;
}

$banco = Conn::connect();

$sql = "SELECT p.idProduto,p.nome, p.preco, p.precoPromo, p.descricao, p.estoque, p.ativo, f.nome as 'Categoria', m.nome as 'Servidor'
FROM `produto` as p
INNER JOIN `categoria_filho` as f on p.id_categoria_filho = f.idCategoriaFilho
INNER JOIN `categoria_mae` as m on f.id_categoria_mae = m.idCategoriaMae 
order by m.nome, f.nome";


$stmt = $banco->prepare($sql);

$stmt->execute();

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);