<html>
<!--Titulo ao cabeçario  Lembrrar que cada campo tem que ter o nome ligado-->
<head>
<body style="background-image:url('Fotos/3carro.jpg'); ">
<title>Cadastro de Pessoas </title>
</head>
<script src=jquery-1.11.1.min.js></script>
<script  type="text/javascript">
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
    $.getScript('http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep='+$('#cep').val(), function(){
    // o getScript dá um eval no script, então é só ler!
    //Se o resultado for igual a 1
    if(resultadoCEP['resultado'] && resultadoCEP['bairro'] != ''){
    // troca o valor dos elementos
    $('#endereco').val(unescape(resultadoCEP['tipo_logradouro'])+': '+unescape(resultadoCEP['logradouro']));
    $('#bairro').val(unescape(resultadoCEP['bairro']));
    $('#cidade').val(unescape(resultadoCEP['cidade']));
    $('#estado').val(unescape(resultadoCEP['uf']));
    //$(“#enderecoCompleto”).show(“slow”);
    $('#numero').focus();
    //document.getElementById(“load”).style.display = ‘none’;
    //validate()
    }else{
    alert('Endereço não encontrado');
    //$(“#enderecoCompleto”).show(“slow”);
    return false;
    }
    });
    }
    else
    {
    alert('Antes, preencha o campo CEP!')
    //document.getElementById(“load”).style.display = ‘none’;
    }
    return false;

    }
</script>
<fieldset>
	<legend> Dados Pessoais</legend>
	Codigo:<br>
	<input type="text" name ="Codigo" size="60" value=""> <br>
	CPF:<br>
	<input type="text" name ="cpf" size="60" value=""> 
	<input type="radio" name="sexo" value="masculino">Masculino 
	<input type="radio" name="sexo" value="Feminino">Feminino <br>
	Nome:<br>
	<input type="text" name ="nome" size="197" value=""> <br>
	Endereco:<span style="padding-left:360px">  Numero/Comp.</span> <br>
	<input type="text" name="endereco" size="60" value=""> <span style="padding-left:20px"> <input type="text" name ="NComp" size="60" value=""></span> <br>
	Bairro:<span style="padding-left:380px">  Cidade:</span><span style="padding-left:350px"> UF:</span> <br>
	<input type="text" nome ="bairro" size="60" value=""> <span style="padding-left:20px"> <input type="text" name ="uf" size="60" value=""><td>
<select class="form_campos" name="estado">
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
CEP:<span style="padding-left:390px"> <button id=”btn” onclick="getEndereco" >Consultar</button>  Fone Residencial:</span><span style="padding-left:290px"> Celular:</span> <br>
	<input type="text" CEP ="nome" size="60" value=""> <span style="padding-left:20px"> <input type="text" name ="Celular" size="60" value=""> </span> 
		<input type="text" name ="nome" size="60" value=""> <br>
		
	E-mail:<br>
	<input type="text" name ="E-mail" size="197" value=""><br><br>
<input type="submit" value="Cadastrar"> &nbsp;&nbsp;&nbsp
<input type="submit" value="Tela Inicial"> &nbsp;&nbsp;&nbsp
<input type="submit" value="Tela Veiculos"> &nbsp;&nbsp;&nbsp
<input type="reset" value="LIMPAR"> 	


</fieldset>
<br>

</html>