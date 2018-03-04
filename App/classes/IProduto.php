<?php

namespace App\classes;

interface IProduto
{
	public function getId();
	public function getNome();
	public function getPreco();
	public function getPrecoPromo();
	public function getDescricao();
	public function getImagem();
	public function getAtivo();
	public function getEstoque();
	public function getCategoria();

	public function setId($id);
	public function setNome($nome);
	public function setPreco($preco);
	public function setPrecoPromo($promo);
	public function setDescricao($descricao);
	public function setImagem($imagem);
	public function setAtivo($ativo);
	public function setEstoque($estoque);
	public function setCategoria($categoria);
}