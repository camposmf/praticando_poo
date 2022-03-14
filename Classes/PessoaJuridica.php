<?php

    require_once("Pessoa.php");
    class PessoaJuridica extends Pessoa {

        private $cnpj;
        private $limiteCredito;

        public function __construct($objPessoaJuridica){

            $this->nome             =   $objPessoaJuridica->nome;
            $this->codigo           =   $objPessoaJuridica->codigo;
            $this->endereco         =   $objPessoaJuridica->endereco;
            $this->telefone         =   $objPessoaJuridica->telefone;
            $this->limiteCredito    =   $objPessoaJuridica->limiteCredito;
            $this->numeroEndereco   =   $objPessoaJuridica->numeroEndereco;
            $this->cnpj             =   $this->formatarCnpj($objPessoaJuridica->cnpj);

        }

        public function formatarCnpj($numeroCnpj){

            $numeroCnpjFormatado = substr($numeroCnpj, 0, 2).".".
                                   substr($numeroCnpj, 2, 3).".".
                                   substr($numeroCnpj, 5, 3)."/".
                                   substr($numeroCnpj, 8, 4)."-".
                                   substr($numeroCnpj, 12, 2);
                                  
            return $numeroCnpjFormatado;

        }

        public function exibirDadosPessoais(){

            echo "<strong>Informações Pessoais (PJ):</strong><br/>";
            echo "Código: ".$this->codigo."<br/>";
            echo "Razão Social: ".$this->nome."<br/>";
            echo "Endereço: ".$this->endereco."<br/>";
            echo "Número do Endereço: ".$this->numeroEndereco."<br/>";
            echo "Número do Telefone: ".$this->telefone."<br/>";
            echo "Número CNPJ: ".$this->cnpj."<br/>";
            echo "Limite do Crédito: ".$this->limiteCredito."<br/><br/>";

        }

    }

?>