<?php

namespace App;

class Route
{
	
	//Atributos
	private $route;


	//Metodos
	public function __construct(){
		$this->initRoutes();
		$this->run($this->getUrl());
	}

	public function initRoutes(){
		$routes['home'] = array('route'=>'/!ecommerce%20t/public/', 'arq'=>'index.php');
		$routes['adm'] = array('route'=>'/!ecommerce%20t/public/admin', 'arq'=>'/admin/index.php');
		$this->setRoutes($routes);
	}

	public function setRoutes(array $route){
		$this->route = $route;
	}


	public function run($url){
		array_walk($this->route, function ($route) use ($url){
			if($url == $route['route']){
				include 'html/' . $route['arq'];
			}

		});
	}


	public function getUrl(){
		//echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}
}

