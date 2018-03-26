<?php

define('DIR', $_SERVER['DOCUMENT_ROOT']);
require_once DIR . "/!ecommerce t/vendor/autoload.php";


use App\classes\Administrativo;

$adm = new Administrativo(App\banco\Conn::connect());
$resultado = $adm->produtos_categorias_servidores($adm->paginacao_produtos($_GET['paginacao']));

echo json_encode($resultado);
//echo json_encode(Administrativo::paginacao($_GET['paginacao']));