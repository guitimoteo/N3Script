<?php

$usuario = $_POST['usuario'];
$veiculo = $_POST['veiculo'];
$data =  date('H:i:s');

include './conecta_banco.php';

mysql_query("INSERT INTO ticket VALUES('$usuario' ,'$veiculo','$data')") or die(mysql_error());
mysql_query("INSERT INTO reg_geral VALUES('$usuario' ,'$veiculo','$data','')") or die(mysql_error());
echo 'Cadastrado';
echo '<META http-equiv="refresh" content="1; Url="Ticket.php"> ';