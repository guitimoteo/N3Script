<html>
<!--Titulo ao cabeçario  Lembrrar que cada campo tem que ter o nome ligado-->
<head>
<body style="background-image:url('Fotos/3carro.jpg'); ">
<title>Cadastro de Pessoas </title>
</head>
<script src=jquery-1.11.1.min.js></script>
<script  type="text/javascript">
    
    function formatar(mascara, documento){
var i = documento.value.length;
var saida = mascara.substring(0,1);
var texto = mascara.substring(i)
if (texto.substring(0,1) != saida){
documento.value += texto.substring(0,1);
}
}
        function getEndereco() {
    if($.trim($('#cep').val())!= '') {
    //document.getElementById(“load”).style.display = ‘block’;
    /*
    Para conectar no serviço e executar o json, precisamos usar a função
    getScript do jQuery, o getScript e o dataType:”jsonp” conseguem fazer o cross-domain, os outros
    dataTypes não possibilitam esta interação entre domínios diferentes
    Estou chamando a url do serviço passando o parâmetro “formato=javascript” e o CEP digitado no formulário
    http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep=”+$(“#cep&#8221;).val()
    */
    $.getScript('consultarCep.php?cep='+$('#cep').val(), function(){
    // o getScript dá um eval no script, então é só ler!
    //Se o resultado for igual a 1
    if(resultadoCEP['resultado'] && resultadoCEP['bairro'] != ''){
    // troca o valor dos elementos
    $('#endereco').val(unescape(resultadoCEP['logradouro']));
    $('#bairro').val(unescape(resultadoCEP['bairro']));
    $('#cidade').val(unescape(resultadoCEP['cidade']));
    $('#estado').val(unescape(resultadoCEP['uf']));
    //$(“#enderecoCompleto”).show(“slow”);
    $('#numero').focus();
    }else{
    alert('Endereço não encontrado');
    return false;
    }
    });
    }
    else
    {
    alert('Preencha o campo CEP!')
    }
    return false;

    }
</script>
<form action="cadastrarPessoa.php" method="POST">
<fieldset>
	<legend> Dados Pessoais</legend>
	Codigo:<br>
	<input type="text" name ="Codigo" size="60" value=""> <br>
	CPF:<br>
	<input type="text" name ="cpf" size="60" value=""> 
	<input type="radio" name="sexo" value="masculino">Masculino 
	<input type="radio" name="sexo" value="feminino">Feminino <br>
	Nome:<br>
	<input type="text" name ="nome" size="197" value=""> <br>
	Endereco:<span style="padding-left:360px">  Numero/Comp.</span> <br>
        <input type="text" name="endereco" id="endereco" size="60" value=""> <span style="padding-left:20px"> <input type="text" name ="NComp" size="60" value=""></span> <br>
	Bairro:<span style="padding-left:380px">  Cidade:</span><span style="padding-left:350px"> UF:</span> <br>
	<input type="text" nome ="bairro" id="bairro" size="60" value=""> <span style="padding-left:20px"> <input type="text" name ="cidade" id="cidade" size="60" value=""><td>
<select class="form_campos" name="estado" id="estado">
<option value="Escolha seu Estado">Escolha seu Estado</option>
<option value="AC">AC</option>
<option value="AL">AL</option>
<option value="AM">AM</option>
<option value="AP">AP</option>
<option value="BA">BA</option>
<option value="CE">CE</option>
<option value="DF">DF</option>
<option value="ES">ES</option>
<option value="GO">GO</option>
<option value="MA">MA</option>
<option value="MG">MG</option>
<option value="MT">MT</option>
<option value="MS">MS</option>
<option value="PA">PA</option>
<option value="PB">PB</option>
<option value="PE">PE</option>
<option value="PI">PI</option>
<option value="PR">PR</option>
<option value="RJ">RJ</option>
<option value="RN">RN</option>
<option value="RO">RO</option>
<option value="RR">RR</option>
<option value="RS">RS</option>
<option value="SC">SC</option>
<option value="SE">SE</option>
<option value="SP">SP</option>
<option value="TO">TO</option>
</select>
</td> </span> 
	

<br>
CEP:<span style="padding-left:390px"> <button id=”btn” onclick="return getEndereco()" >Consultar</button>  Fone Residencial:</span><span style="padding-left:290px"> Celular:</span> <br>
<input type="text" nome ="cep" id="cep" size="9" maxlength="9" value="" required pattern="\d{5}-?\d{3}" onkeydown="formatar('#####-###', this)"> <span style="padding-left:20px"> <input type="text" name ="Celular" size="60" value=""> </span> 
		<input type="text" name ="nome" size="60" value=""> <br>
		
	E-mail:<br>
        <input type="email" name ="E-mail" size="197" value=""><br><br>
        <input type="submit" value="Cadastrar" formmethod="POST" formaction="cadastrarPessoa.php"> &nbsp;&nbsp;&nbsp
<input type="submit" value="Tela Inicial"> &nbsp;&nbsp;&nbsp
<input type="submit" value="Tela Veiculos"> &nbsp;&nbsp;&nbsp
<input type="reset" value="LIMPAR"> 	


</fieldset>
</form>
<br>

</html>