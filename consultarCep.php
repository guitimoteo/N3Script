<?php

include './Persistencia/Datasource.php';
include './Persistencia/CepDao.php';
include './Persistencia/Cep.php';
//$cep = new Cep();
$datasource = new Datasource('localhost', 'cep_brasil', 'root', '');
$cepDao = new CepDao;
$cepCodigo = $_GET['cep'];
$cep = $cepDao->getObject($datasource, $cepCodigo);
//echo $cep->getCidade(); Exemplo: mostrando a cidade
// echo $cep->toString();//Exemplo: mostrando tudo.
 $response = array("uf"=>$cep->getCep());
  $response = array("cidade"=>$cep->getCidade());
 $response = array("bairro"=>$cep->getBairro());
 $response = array("tipo_logradouro"=>' ');
 $response = array("logradouro"=>$cep->getEndereco());
  $response = array("resultado"=>'2');
 $response = array("resultado_txt"=>"sucesso");
  $jsonCep = json_encode($response);
echo 'var resultadoCEP = '.$jsonCep; 