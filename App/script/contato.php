<?php
require_once '../../vendor/autoload.php';

use App\classes\Contato;


/*
$a = ['status'=>'true', 'codigo_id'=>4567];

echo json_encode($a);
*/

$c = new Contato();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);


$c->setNome($nome)->setEmail($email)->setMensagem($mensagem);

if($c->enviaBanco()){
	$e = ['status'=>'true'];
} else {
	$e = ['status'=>'false'];
	die();
}

echo json_encode($e);