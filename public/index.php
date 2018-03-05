<?php

require_once '../vendor/autoload.php';




$c = new App\classes\Contato();

$c->setNome("Andrey2");
$c->setEmail("Andrey@hotmail.com");
$c->setMensagem('2Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lectus ligula, mollis non blandit eget, molestie quis dui. Phasellus viverra auctor ex, at porttitor tortor pretium non. Nulla gravida sollicitudin neque, vitae accumsan turpis efficitur sit amet. Nam orci tortor, ornare id aliquet eu, convallis quis nunc.');

//print_r($c);

$c->enviaBanco();