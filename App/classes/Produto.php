<?php

namespace App\classes;


class Produto implements IProduto
{
	//Atributos
	private $id;
	private $nome;
	private $preco;
	private $precoPromo;
	private $descricao;
	private $imagem;
	private $ativo;
	private $estoque;
	private $categoria;


	//Metodos

	//Getters
	public function getId()
	{
		return $this->id;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function getPreco()
	{
		return $this->preco;
	}

	public function getPrecoPromo()
	{
		return $this->precoPromo;
	}

	public function getDescricao()
	{
		return $this->descricao;
	}

	public function getImagem()
	{
		return $this->imagem;
	}

	public function getAtivo()
	{
		return $this->ativo;
	}

	public function getEstoque()
	{
		return $this->estoque;
	}

	public function getCategoria()
	{
		return $this->categoria;
	}



	//Setters

	public function setId($id){
		$this->id = $id;
		return $this;
	}

	public function setNome($nome){
		$this->nome = $nome;
		return $this;
	}

	public function setPreco($preco){
		$this->preco = $preco;
		return $this;
	}

	public function setPrecoPromo($promo){
		$this->precoPromo = $promo;
		return $this;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
		return $this;
	}

	public function setImagem($imagem){
		$this->imagem = $imagem;
		return $this;
	}

	public function setAtivo($ativo){
		$this->ativo = $ativo;
		return $this;
	}

	public function setEstoque($estoque){
		$this->estoque = $estoque;
		return $this;
	}

	public function setCategoria($categoria){
		$this->categoria = $categoria;
		return $this;
	}

}