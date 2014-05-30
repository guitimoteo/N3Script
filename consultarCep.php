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
//echo $cep->toString();//Exemplo: mostrando tudo.
if(isset($cep->uf)){
 $response = array('uf'=>$cep->getUf(),'cidade'=>$cep->getCidade(),'bairro'=>$cep->getBairro(),'tipo_logradouro'=>" ",'logradouro'=>$cep->getEndereco(),'resultado'=>'2','resultado_txt'=>"sucesso");
  $jsonCep = json_encode($response);
echo 'var resultadoCEP = '.$jsonCep;
mysql_close();
}  else {
  $response = array('resultado'=>'1','bairro'=>'','resultado_txt'=>"Endereço não encontrado");
  $jsonCep = json_encode($response);
  echo 'var resultadoCEP = '.$jsonCep;
  mysql_close();
}