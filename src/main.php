<?php

include_once __DIR__ . "/../vendor/autoload.php";

//Importando o "Pessoa.php".
use App\model\Pessoa;

//Instanciando duas pessoas.
$p1 = new Pessoa("Red", 16);
$p2 = new Pessoa("Yellow", 15);

//Criando echos para mostrar o nome e idade das pessoas no HTML.
echo("<p> Nome: '"); echo $p1->nome; echo("' | Idade: '"); echo $p1->idade; echo("'</p>");
echo("<p> Nome: '"); echo $p2->nome; echo("' | Idade: '"); echo $p2->idade; echo("'</p>");
?>