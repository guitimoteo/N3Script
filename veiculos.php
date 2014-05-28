<html>
<!--Titulo ao cabeçario  Lembrrar que cada campo tem que ter o nome ligado-->



<head>
<title>Cadastro de Veiculos </title>
</head>
<fieldset>

<script LANGUAGE="JavaScript">
function login(){
var user=form_campos.value;


if (user=="CHEVROLET"){
	window.location="Fotos/index.html"
	
	}
	else
	{
		alert("Usuario ou senha invalido!!!");
		document.frm_login.usuario.value="";
		document.frm_login.senha.value="";
		document.frm_login.usuario.focus();
		}
	}
function Limpar(){
document.frm_login.usuario.value="";
document.frm_login.senha.value="";
document.frm_login.usuario.focus();
}
</script>
<form name="form1" method="post">
<body style="background-image:url('Fotos/mcarro7.jpg'); ">

Identificador:<br>
<!--Abaixo Campo Texto: -->
<input type="text" name = "identificador" size="35" value=""><br><br>


Marca:  <span style="padding-left:110px">  Modelo: <span style="padding-left:106px"> Numero da Placa <br>  
<input type="text" name = "marca" size="19" value="">
<input type="text" name = "modelo" size="20" value="">	
<input type="text" name = "placa" size= "20" value="">
	
<br><br>
<!-- Cor -->						
Cor:<span style="padding-left:115px"> <br>
<!--Abaixo Campo Texto: -->
<input type="text" name = "cor" size="35" value=""><br><br>


			<hr>
			<input type="submit" name="bt_submit" value="Cadastrar" onClick="document.form1.action='inserir_veiculos.php'">
			<hr>
</form>
</html>





























