<?php

$usuario = $_POST['usuario'];
$veiculo = $_POST['veiculo'];
$data =  date('H:i:s');

include './conecta_banco.php';

mysql_query("UPDATE reg_geral SET hr_saida='$data' WHERE codigo = '$usuario' AND identificacao = '$veiculo' ") or die(mysql_error());
echo 'Cadastrado';
echo '<META http-equiv="refresh" content="1; Url="Ticket.php"> ';