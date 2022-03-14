<?php

    require_once("Pessoa.php");
    class PessoaFisica extends Pessoa {

        private $cpf;
        private $quantidadeFilhos;

        public function __construct($objPessoaFisica){
            
            $this->nome             =   $objPessoaFisica->nome;
            $this->codigo           =   $objPessoaFisica->codigo;
            $this->endereco         =   $objPessoaFisica->endereco;
            $this->telefone         =   $objPessoaFisica->telefone;
            $this->numeroEndereco   =   $objPessoaFisica->numeroEndereco;
            $this->quantidadeFilhos =   $objPessoaFisica->quantidadeFilhos;
            $this->cpf              =   $this->formatarCpf($objPessoaFisica->cpf);
            
        }

        private function formatarCpf($numeroCpf){
            
            $numeroCpfFormatado = substr($numeroCpf, 0, 3).".".
                                  substr($numeroCpf, 3, 3).".".
                                  substr($numeroCpf, 6, 3)."-".
                                  substr($numeroCpf, 9, 2);

            return $numeroCpfFormatado;

        }

        public function exibirDadosPessoais(){

            echo "<strong>Informações Pessoais (PF):</strong><br/>";
            echo "Código: ".$this->codigo."<br/>";
            echo "Nome: ".$this->nome."<br/>";
            echo "Endereço: ".$this->endereco."<br/>";
            echo "Número do Endereço: ".$this->numeroEndereco."<br/>";
            echo "Número do Telefone: ".$this->telefone."<br/>";
            echo "Número CPF: ".$this->cpf."<br/>";
            echo "Quantidade de Filhos: ".$this->quantidadeFilhos."<br/><br/>";

        }

    }

?>