<?php

define('DIR', $_SERVER['DOCUMENT_ROOT']);
require_once DIR . "/!ecommerce t/vendor/autoload.php";


$c = new App\classes\Categoria();
$menu = $c->menu_esquerda();

print_r($menu);