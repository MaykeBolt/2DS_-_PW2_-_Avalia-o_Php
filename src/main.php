<?php

include_once __DIR__ . "/../vendor/autoload.php";

use App\model\Pessoa;

$p1 = new Pessoa("Red", 16);
$p2 = new Pessoa("Yellow", 15);

echo("<p> Nome: '"); echo $p1->nome; echo("' | Idade: '"); echo $p1->idade; echo("'</p>");
echo("<p> Nome: '"); echo $p2->nome; echo("' | Idade: '"); echo $p2->idade; echo("'</p>");
?>