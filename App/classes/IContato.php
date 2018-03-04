<?php

namespace App\classes;

interface IContato
{
	public function getNome();
	public function getEmail();
	public function getMensagem();

	public function setNome($nome);
	public function setEmail($email);
	public function setMensagem($mensagem);

	public function adiconar();
	public function listar($qtd = null);
}