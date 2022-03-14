<?php

    require("./Classes/PessoaFisica.php");
    require("./Classes/PessoaJuridica.php");

    $objPessoaFisica = (object) array(
        "codigo"            =>  1,
        "nome"              =>  "Marcos Albuquerque",
        "cpf"               =>  "30220979057",
        "quantidadeFilhos"  =>  4,
        "endereco"          =>  "Rua Nelson André Garcia",
        "numeroEndereco"    =>  17,
        "telefone"          =>  "(64) 97128-5728"
    );

    $objPessoaJuridica = (object) array(
        "codigo"            =>  904,
        "nome"              =>  "Willis Towers Watson",
        "cnpj"              =>  "29668524000137",
        "limiteCredito"     =>  220.73,
        "endereco"          =>  "Avenida das Nações Unidas - Chácara Santo Antônio",
        "numeroEndereco"    =>  14.401,
        "telefone"          =>  "(11) 4505-6300"
    );

    $pessoaFisica = new PessoaFisica($objPessoaFisica);
    $pessoaFisica->exibirDadosPessoais();

    $pessoaJuridica = new PessoaJuridica($objPessoaJuridica);
    $pessoaJuridica->exibirDadosPessoais();


?>