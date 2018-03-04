<?php

namespace App\banco;

class Conn 
{
	public static function connect(){
		return new \PDO('mysql: host=localhost; dbname=loja_t; charset=utf8', 'root', '');
	}

}