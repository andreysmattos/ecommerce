<?php

namespace App\classes;

interface ICrudProduto
{
	public function find(int $id);
	public function list();
	public function save();
	public function update(int $id);
}