<html>
<head>

</head>
<!--
<script type="text/css" src=Assets/estilo.css />
-->
<body background='Fotos/3carro.jpg'>
    
    
    <table>
        <tr valign=center>
<td class=tabval></td>
<td class=tabval><b>codigo</b></td>
<td class=tabval>identificacao &nbsp;</td>
<td class=tabval>hora de entrada &nbsp</td>
<td class=tabval>hora de saida &nbsp</td>
<td class=tabval></td>
</tr>
<?php
include './conecta_banco.php';

$result = mysql_query("SELECT * FROM reg_geral") or die(mysql_error());

          
          	$i=0;
	while( $row=mysql_fetch_array($result) )
	{
		if($i>0)
		{
			echo "<tr valign=bottom>";
			echo "<td bgcolor=#ffffff background='Fotos/3carro.jpg' colspan=6><img src=Fotos/logocarro1.png width=1 height=1></td>";
			echo "</tr>";
		}
		echo "<tr valign=center>";
		echo "<td class=tabval><img src='Fotos/4carro.jpg' width=10 height=20></td>";
		echo "<td class=tabval><b>".$row['codigo']."</b></td>";
		echo "<td class=tabval>".$row['identificacao']."&nbsp;</td>";
		echo "<td class=tabval>".$row['hr_entrada']."&nbsp;</td>";
                echo "<td class=tabval>".$row['hr_saida']."&nbsp;</td>";
		echo "<td class=tabval></td>";
		echo "</tr>";
		$i++;

	}
        mysql_close();
          ?>
</table>


</body>
</html>

