<?php
	
	
	
	
	$identificador = $_POST["identificador"];
	$marca = $_POST["marca"];
	$modelo = $_POST["modelo"];
	$placa = $_POST["placa"];
	$cor = $_POST["cor"];
	
	include 'conecta_banco.php'; //inclui o arquivo de conexão com o banco
	
	$sql = mysql_query("SELECT * FROM veiculo WHERE identificador ='$identificador'")or die(mysql_error());//tratamento de erro do mysql
	$validar = mysql_num_rows($sql);
	
	if ($validar > 0){
		echo "Código já cadastrado!";
	}
	else {
		$sql = mysql_query("INSERT INTO veiculo VALUES('$identificador', '$marca', '$modelo', '$placa', '$cor' )") or die(mysql_error());
		echo "Dados cadastrados!";
	}
	
	mysql_close($connect);
?>

<html>
	<body>
		<form name="form1" method="post">
			<hr>
			<input type="submit" name="bt_voltar" value="Voltar" onClick="document.form1.action='Fundo.php'">
			<hr>
		</form>
	</body>
</html>