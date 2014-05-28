<?php

$connect = mysql_connect("127.0.0.1", "root", "");

if (!$connect) { 
	die("Não foi possível se conectar ao banco de dados!");
}

$db = mysql_select_db("estacionamento");

?>