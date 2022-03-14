<?php

    abstract class Pessoa {
        
        private $codigo;
        private $nome;
        private $endereco;
        private $numeroEndereco;
        private $telefone;

        abstract public function exibirDadosPessoais();

    }

?>