<?php

namespace App\classes;

use App\classes\IProduto;


use Monolog\Logger;
use Monolog\Handler\StreamHandler;


class CrudProduto implements ICrudProduto
{
	//Atributos
	private $db;
	private $produto;

	//Metodos
	public function __construct(\PDO $db)
	{
		$this->db = $db;
		
	}


	public function setProduto(IProduto $produto)
	{
		$this->produto = $produto;
	}


	public function find(int $id, $campos = NULL)
	{
		$c = '';
		$id = filter_var($id, FILTER_VALIDATE_INT);

		if(!$id || $id <= 0 || !is_int($id)){
			return false;
		}

		if(is_array($campos)){
			foreach($campos as $campo){
				$virgula = ($campo == end($campos)) ? '' : ', ';
				$c .= $campo . $virgula;
			}
		} else {
			$c = '*';
		}



		try {
			$sql = "SELECT $c FROM `produto` where idProduto = :id";

			$stmt = $this->db->prepare($sql);

			$stmt->bindValue(':id', $id);

			$stmt->execute();

			return $stmt->fetch(\PDO::FETCH_ASSOC);

		} catch (\PDOException $error){
			$log = new Logger('CrudProduto');
			$log->pushHandler(new StreamHandler('../log_produtos/crud.log', Logger::WARNING));

			$log->error('Error no metodo find(), verifique o arquivo ' . $error->getFile() . "na linha " . $error->getLine() . " error mensagem: " . $error->getMessage());
			die();
		}

	}

	public function list($campos = null)
	{
		$c = '';

		if(is_array($campos)){
			foreach($campos as $campo){
				$virgula = ($campo == end($campos)) ? '' : ', ';
				$c .= $campo . $virgula;
			}
		} else {
			$c = '*';
		}



		try {
			$sql = "SELECT $c FROM `produto`";

			$stmt = $this->db->prepare($sql);

			$stmt->execute();

			return $stmt->fetchAll(\PDO::FETCH_ASSOC);


		} catch (\PDOException $error){
			$log = new Logger('CrudProduto');
			$log->pushHandler(new StreamHandler('../log_produtos/crud.log', Logger::WARNING));

			$log->error('Error no metodo list(), verifique o arquivo ' . $error->getFile() . "na linha " . $error->getLine() . " error mensagem: " . $error->getMessage());
			die();
		}

	}

	public function save()
	{
		$sql = "INSERT INTO `produto` (nome, preco, precoPromo, descricao, imagem, ativo, estoque, id_categoria_filho) 
		VALUES (:nome, :preco, :precoPromo, :descricao, :imagem, :ativo, :estoque, :id_categoria_filho)";

		$stmt = $this->db->prepare($sql);

		$stmt->bindValue(':nome', $this->produto->getNome());
		$stmt->bindValue(':preco', $this->produto->getPreco());
		$stmt->bindValue(':precoPromo', $this->produto->getPrecoPromo());
		$stmt->bindValue(':descricao', $this->produto->getDescricao());
		$stmt->bindValue(':imagem', $this->produto->getImagem());
		$stmt->bindValue(':ativo', $this->produto->getAtivo());
		$stmt->bindValue(':estoque', $this->produto->getEstoque());
		$stmt->bindValue(':id_categoria_filho', $this->produto->getCategoria());

		$resultado = $stmt->execute();

		if($resultado){
			return $this->db->lastInsertId();
		} else {
			print_r($stmt->errorInfo());
			$log = new Logger('CrudProduto');
			$log->pushHandler(new StreamHandler('../log_produtos/crud.log', Logger::WARNING));

			

			$log->error('Error no metodo save(), verifique o erro: ' . $stmt->errorInfo()[2]);

		}



	}

	public function update(int $id)
	{
		$id = filter_var($id, FILTER_VALIDATE_INT);

		if(!$id || $id <= 0 || !is_int($id)){
			return false;
		}

		$sql = "UPDATE `produto` set name = :name, preco = :preco, precoPromo = :precoPromo, descricao = :descricao, imagem = :imagem, ativo = :ativo, estoque = :estoque, id_categoria_filho = :id_categoria_filho WHERE idProduto = $id";


		$stmt = $this->db->prepare($sql);

		$stmt->bindValue(':nome', $this->produto->getNome());
		$stmt->bindValue(':preco', $this->produto->getPreco());
		$stmt->bindValue(':precoPromo', $this->produto->getPrecoPromo());
		$stmt->bindValue(':descricao', $this->produto->getDescricao());
		$stmt->bindValue(':imagem', $this->produto->getImagem());
		$stmt->bindValue(':ativo', $this->produto->getAtivo());
		$stmt->bindValue(':estoque', $this->produto->getEstoque());
		$stmt->bindValue(':id_categoria_filho', $this->produto->getCategoria());

		$resultado = $stmt->execute();

		if($resultado){
			return $resultado;
		} else {
			$log = new Logger('CrudProduto');
			$log->pushHandler(new StreamHandler('../log_produtos/crud.log', Logger::WARNING));

			

			$log->error('Error no metodo update(), verifique o erro: ' . $stmt->errorInfo()[2]);
		}


	}

	public function delete(int $id)
	{
		$id = filter_var($id, FILTER_VALIDATE_INT);

		if(!$id || $id <= 0 || !is_int($id)){
			return fase;
		}

		$sql = "DELETE FROM `produto` where idProduto = :id";

		$stmt = $this->db->prepare($sql);

		$stmt->bindValue(':id', $id);

		$resultado = $stmt->execute();

		if($resultado){
			return $resultado;
		} else {
			$log = new Logger('CrudProduto');
			$log->pushHandler(new StreamHandler('../log_produtos/crud.log', Logger::WARNING));

			

			$log->error('Error no metodo delete(), verifique o erro: ' . $stmt->errorInfo()[2]);
		}
	}

}