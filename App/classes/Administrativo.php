<?php

namespace App\classes;

class Administrativo
{

	private $db;

	public function __construct(\PDO $db)
	{
		$this->db = $db;
		
	}

	public function produtos_categorias_servidores(array $pag)
	{
		
		try {

		$sql = "SELECT p.idProduto,p.nome, p.preco, p.precoPromo, SUBSTR(p.descricao,1, 55) as descricao, p.estoque, p.ativo, 
			f.nome as 'Categoria', 
			m.nome as 'Servidor' 
			FROM `produto` as p 
			INNER JOIN `categoria_filho` as f on p.id_categoria_filho = f.idCategoriaFilho 
			INNER JOIN `categoria_mae` as m on f.id_categoria_mae = m.idCategoriaMae 
			order by m.nome, f.nome LIMIT :inicio, :fim";


		$stmt = $this->db->prepare($sql);

		$stmt->bindValue(':inicio', $pag['inicio'], \PDO::PARAM_INT);
		$stmt->bindValue(':fim', $pag['limite'], \PDO::PARAM_INT);

		$stmt->execute();

		return ['dados'=>$stmt->fetchAll(\PDO::FETCH_ASSOC), 'total'=>$pag['total']];

		} catch (\PDOException $e){
			print_r($e);
			//REG MONOLOG
		}
	}


	public static function desc($str){
		if(mb_strlen($str) > 55)
			return substr($str, 0, 55) . '...';
		return $str;
	}


	public function paginacao_produtos($pag)
	{
		$iten_pagina = 3; //esse vai ser usado na query
		$pagina_atual = filter_var($pag, FILTER_VALIDATE_INT) ?? 1;
		if(!$pagina_atual){die();}
		$inicio_limit = ($iten_pagina * $pagina_atual) - $iten_pagina; //esse vai ser usado na query

		$sql = 'SELECT COUNT(*) as total from `produto`';

		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		$total = $stmt->fetch(\PDO::FETCH_ASSOC);

		return ['limite'=>$iten_pagina, 'inicio'=>$inicio_limit, 'total'=>ceil($total['total'] / $iten_pagina )];

	}

}