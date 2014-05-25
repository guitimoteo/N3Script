<?php
include './Persistencia/Veiculo.php';
include './Persistencia/VeiculoDao.php';
include './Persistencia/Datasource.php';

$datasource = new Datasource('localhost', 'estacionamento', 'root', '');
$veiculo = new Veiculo();
$veiculoDao = new VeiculoDao();
//inserindo tudo de uma vez
//$veiculo->setTudo("222222", "CHEVROLET", "CHEVETTE", "MNM6666", "preta");
//$veiculoDao->inserir($datasource, $veiculo);
$veiculo->setIdentificador('1111111');
//retornando com um objeto:
$veiculoA = $veiculoDao->getObject($datasource, '111111');

echo $veiculoA->toString();

//retornando sem um objeto:
$veiculoB = $veiculoDao->getObject($datasource, '111112');
echo $veiculoB->toString();
?>
