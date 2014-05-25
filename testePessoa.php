<?php
include './Persistencia/Pessoa.php';
include './Persistencia/PessoaDao.php';
include './Persistencia/Datasource.php';

$datasource = new Datasource('localhost', 'estacionamento', 'root', '');
$pessoa = new Pessoa();
$pessoaDao = new PessoaDao();
$pessoa->setTudo("55555", '666666', "bebado", "$enderecoIn", "$bairroIn",
        '$cepIn', '$emailIn', '$sexoIn', '$numeroIn', '$cidadeIn', '$telefoneIn', '$celularIn', 'SP');
$pessoaDao->inserir($datasource, $pessoa);

$pessoaB = $pessoaDao->getObject($datasource, "55555");
echo $pessoaB->toString();
?>
