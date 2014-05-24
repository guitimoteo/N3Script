<?php
include './Persistencia/Datasource.php';
include './Persistencia/CepDao.php';
include './Persistencia/Cep.php';
$cep = new Cep();
$datasource = new Datasource('localhost', 'cep_brasil', 'root', '');
$cepDao = new CepDao;
$cep = $cepDao->getObject($datasource, "69900-050");
//echo $cep->getCidade(); Exemplo: mostrando a cidade
 echo $cep->toString();//Exemplo: mostrando tudo.
 
 
?>
