<?php
include './conecta_banco.php';

$consulta = mysql_query("SELECT * FROM reg_geral") or die(mysql_error());
$i=0;
          
          while ($row = mysql_fetch_array($consulta)) {
              echo $row[i];
              $i++;
          }

