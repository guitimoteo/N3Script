<?php

$connect = mysql_connect("127.0.0.1", "root", "");

if (!$connect) { 
	die("N�o foi poss�vel se conectar ao banco de dados!");
}

$db = mysql_select_db("estacionamento");

?>