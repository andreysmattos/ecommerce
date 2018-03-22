<?php

namespace App\classes;


//require_once DIR . "/!ecommerce t/vendor/autoload.php";

use App\banco\Conn;

class Categoria 
{
	private $db;

	public function __construct()
	{
		$this->db = Conn::connect();
	}


	public function categoria_mae()
	{
		$sql = "SELECT nome, idCategoriaMae FROM `categoria_mae` where ativo = 's'";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);

	}


	public function categoria_filho(int $id)
	{
		if($id <= 0 || !is_numeric($id) || !filter_var($id, FILTER_VALIDATE_INT)){
			return false;
		}

		$sql = "SELECT idCategoriaFilho, nome, 
				(SELECT count(*) FROM `produto` where `id_categoria_filho` =  idCategoriaFilho)
				 as quantidade
 				FROM `categoria_filho` 
				WHERE ativo = 's' AND id_categoria_mae = :id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(':id', $id);
		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}


	public function menu_esquerda()
	{
		foreach($this->categoria_mae() as $mae){
			$novo [$mae['nome']] = $this->categoria_filho($mae['idCategoriaMae']);
		}

		return $novo;
	}
}