<?php

namespace App\model;

class Pessoa {
    //Cria atributos de uma Pessoa, sendo estes "nome" e "idade".
    public $nome, $idade;

    //Construtor para forçar atribuir valores aos atributos durante a instância de uma Pessoa.
    function __construct($nome,$idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

}

?>