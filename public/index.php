<?php



define('DIR', $_SERVER['DOCUMENT_ROOT'] . '/!ecommerce t/');
define('ASSET', '/!ecommerce t/assets/');
require_once DIR . "vendor/autoload.php";


//print_r($_SERVER);


$rota = new App\Route();


echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


