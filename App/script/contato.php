<?php

define('DIR', $_SERVER['DOCUMENT_ROOT']);
require_once DIR . "/!ecommerce t/vendor/autoload.php";

use App\classes\Contato;

$email = $_POST['email'] ?? null;
$nome = $_POST['nome'] ?? null;
$mensagem = $_POST['mensagem'] ?? null;

$c = new Contato($email, $nome, $mensagem);

echo json_encode($c->enviaBanco());