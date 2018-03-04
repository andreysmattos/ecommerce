<?php

namespace App\classes;

use App\classes\IContato;
use App\banco\Conn;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Contato implements IContato
{
	//Atributos
	private $nome;
	private $email;
	private $mensagem;
	private $db;


	public function __construct(){
		$this->db = Conn::connect();
	}


	public function enviaBanco(){

		if(!$this->validaMensagem()){
			echo json_encode(['msg'=>'Mensagem invalida']);
			return false;
		}

		if(!$this->validaEmail()){
			echo json_encode(['msg'=>'Email invalido']);
			return false;
		}

		if(!$this->validaNome()){
			echo json_encode(['msg'=>'Nome invalido.']);
			return false;
		}

	
		$sql = 'INSERT INTO `contato` (nome, email, mensagem) VALUES (:nome, :email, :mensagem)';

		$stmt = $this->db->prepare($sql);

		$stmt->bindValue(':nome', $this->nome);
		$stmt->bindValue(':email', $this->email);
		$stmt->bindValue(':mensagem', $this->mensagem);

		$resultado = $stmt->execute();

		if($resultado){
			return $this->db->lastInsertId();
		} else {
			$log = new Logger('CrudProduto');
			$log->pushHandler(new StreamHandler('../log_contato/contato.log', Logger::WARNING));

			$log->error('Error ao inserir contato no banco, verifique o metodo enviaBanco() no arquivo classes/Contato.php --- Msg de erro: ' . $stmt->errorInfo() . " --- msg2: " . $this->db->errorInfo());
			die();
		}



	}

	public function validaMensagem(){
		if(mb_strlen($this->mensagem) < 5){
			return false;
		}

		$mensagem = filter_var($this->mensagem, FILTER_SANITIZE_SPECIAL_CHARS);
		return $mensagem;

	}

	public function validaEmail(){
		$email = filter_var($this->email, FILTER_VALIDATE_EMAIL);
		if(mb_strlen($this->email) < 3 || mb_strlen($this->email) > 255 || !$email){
			return false;
		}
		$email = filter_var($email, FILTER_SANITIZE_SPECIAL_CHARS);
		
		return $email;

	}


	public function validaNome(){
		if(mb_strlen($this->nome) < 3 || mb_strlen($this->nome) > 64){
			return false;
		}

		$nome = filter_var($this->nome, FILTER_SANITIZE_SPECIAL_CHARS);
		return $nome;

	}

	public function getNome(){
		return $this->nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getMensagem(){
		return $this->mensagem;
	}


	public function setNome($nome){
		$this->nome = $nome;
		return $this;
	}

	public function setEmail($email){
		$this->email = $email;
		return $this;
	}

	public function setMensagem($mensagem){
		$this->mensagem = $mensagem;
		return $this;
	}


	public function adiconar(){

	}

	public function listar($qtd = null){

	}

}