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
<body style="background-image:url('Fotos/mcarro7.jpg'); ">

Identificador:<br>
<!--Abaixo Campo Texto: -->
<input type="text" Cor ="nome" size="35" value=""><br><br>


Marca:  <span style="padding-left:115px">  Modelo: <span style="padding-left:150px"> Numero da Placa <br>  
<select class="form_campos" name="Marca" onChange = login> 

<option value="2">CHEVROLET</option>
<option value="4">FIAT</option>
<option value="3">FORD</option>
<option value="16">HONDA</option>
<option value="17">HYUNDAI</option>
<option value="26">MITSUBISHI</option>
<option value="28">PEUGEOT</option>
<option value="30">RENAULT</option>
<option value="35">TOYOTA</option>
<option value="5">VOLKSWAGEN</option>
<option value="0"></option>
<option value="167">ACURA</option>
<option value="237">ADAMO</option>
<option value="223">AGRALE</option>
<option value="6">ALFA ROMEO</option>
<option value="232">AMERICAR</option>
<option value="7">ASIA</option>
<option value="239">ASTON MARTIN</option>
<option value="8">AUDI</option>
<option value="225">AUSTIN</option>
<option value="227">BAJA</option>
<option value="188">BEACH</option>
<option value="9">BENTLEY</option>
<option value="179">BIANCO</option>
<option value="10">BMW</option>
<option value="290">BORGWARD </option>
<option value="289">BRILLIANCE</option>
<option value="162">BRM</option>
<option value="251">BUGATTI</option>
<option value="176">BUGWAY</option>
<option value="119">BUICK</option>
<option value="120">CADILLAC</option>
<option value="219">CBT</option>
<option value="122">CHAMONIX</option>
<option value="241">CHANA</option>
<option value="292">CHANGAN</option>
<option value="271">CHEDA</option>
<option value="270">CHERY</option>
<option value="2">CHEVROLET</option>
<option value="11">CHRYSLER</option>
<option value="12">CITRO&#203;N</option>
<option value="236">CORD</option>
<option value="244">COYOTE</option>
<option value="171">CROSS LANDER</option>
<option value="13">DAEWOO</option>
<option value="14">DAIHATSU</option>
<option value="245">DE SOTO</option>
<option value="285">DE TOMASO </option>
<option value="286">DELOREAN</option>
<option value="177">DKW-VEMAG</option>
<option value="102">DODGE</option>
<option value="233">DUNNAS</option>
<option value="267">EAGLE</option>
<option value="243">EFFA</option>
<option value="247">EMIS</option>
<option value="123">ENGESA</option>
<option value="166">ENVEMO</option>
<option value="250">FARUS</option>
<option value="260">FERCAR BUGGY</option>
<option value="15">FERRARI</option>
<option value="4">FIAT</option>
<option value="266">FIBRAVAN</option>
<option value="230">FNM</option>
<option value="3">FORD</option>
<option value="249">FYBER</option>
<option value="304">GEELY</option>
<option value="126">GEO</option>
<option value="128">GMC</option>
<option value="238">GRANCAR </option>
<option value="264">GREAT WALL</option>
<option value="130">GURGEL</option>
<option value="257">HAFEI</option>
<option value="248">HB</option>
<option value="253">HOFSTETTER</option>
<option value="16">HONDA</option>
<option value="279">HUDSON</option>
<option value="115">HUMMER</option>
<option value="17">HYUNDAI</option>
<option value="275">INCOFER</option>
<option value="183">INFINITI</option>
<option value="184">INTERNATIONAL</option>
<option value="132">ISUZU</option>
<option value="133">IVECO</option>
<option value="287">JAC</option>
<option value="18">JAGUAR</option>
<option value="218">JEEP</option>
<option value="301">JENSEN</option>
<option value="258">JINBEI</option>
<option value="20">JPX</option>
<option value="291">KAISER</option>
<option value="21">KIA</option>
<option value="252">KOENIGSEGG</option>
<option value="254">L AUTOMOBILE</option>
<option value="263">L&#180;AUTO CRAFT</option>
<option value="42">LADA</option>
<option value="22">LAMBORGHINI</option>
<option value="185">LANCIA</option>
<option value="23">LAND ROVER</option>
<option value="303">LANDWIND</option>
<option value="117">LEXUS</option>
<option value="280">LIFAN</option>
<option value="135">LINCOLN</option>
<option value="220">LOBINI</option>
<option value="136">LOTUS</option>
<option value="246">MAHINDRA</option>
<option value="172">MARCOPOLO</option>
<option value="161">MARINA&#180;S</option>
<option value="111">MASERATI</option>
<option value="169">MATRA</option>
<option value="262">MAYBACH</option>
<option value="24">MAZDA</option>
<option value="298">MCLAREN</option>
<option value="259">MENON</option>
<option value="25">MERCEDES-BENZ</option>
<option value="137">MERCURY</option>
<option value="150">MG</option>
<option value="180">MINI</option>
<option value="26">MITSUBISHI</option>
<option value="138">MIURA</option>
<option value="229">MORRIS</option>
<option value="216">MP LAFER</option>
<option value="274">MPLM</option>
<option value="284">NEWTRACK</option>
<option value="27">NISSAN</option>
<option value="141">OLDSMOBILE</option>
<option value="234">OPEL</option>
<option value="297">PACKARD</option>
<option value="261">PAG</option>
<option value="269">PAGANI</option>
<option value="28">PEUGEOT</option>
<option value="142">PLYMOUTH</option>
<option value="143">PONTIAC</option>
<option value="29">PORSCHE</option>
<option value="144">PUMA</option>
<option value="299">RELY</option>
<option value="30">RENAULT</option>
<option value="255">RENO</option>
<option value="281">REVA-I</option>
<option value="186">ROLLS-ROYCE</option>
<option value="214">ROMI</option>
<option value="145">ROVER</option>
<option value="146">SAAB</option>
<option value="147">SANTA MATILDE</option>
<option value="170">SATURN</option>
<option value="31">SEAT</option>
<option value="178">SHELBY</option>
<option value="295">SHINERAY</option>
<option value="231">SHORT</option>
<option value="148">SIMCA</option>
<option value="226">SMART</option>
<option value="272">SPYKER</option>
<option value="32">SSANGYONG</option>
<option value="278">STANDARD</option>
<option value="217">STUDEBAKER</option>
<option value="33">SUBARU</option>
<option value="34">SUZUKI</option>
<option value="276">TAC</option>
<option value="282">TANGER</option>
<option value="302">TESLA</option>
<option value="35">TOYOTA</option>
<option value="268">TRIUMPH</option>
<option value="153">TROLLER</option>
<option value="235">UNIMOG</option>
<option value="5">VOLKSWAGEN</option>
<option value="36">VOLVO</option>
<option value="265">WAKE</option>
<option value="240">WALK</option>
<option value="273">WAY BRASIL</option>
<option value="296">WIESMANN</option>
<option value="213">WILLYS</option>
<option value="288">WILLYS OVERLAND</option>
</select> 

<!--Modelo: -->
<!--Abaixo Campo Texto: -->
<select class="veiculos"  name="modelo">
						<option value=""></option><option value="2079">A10</option><option value="2080">A20</option><option value="2078">ADVANCED DESIGN</option><option value="3072">AGILE</option><option value="3414">AMAZONA</option><option value="1042">ASTRA</option><option value="2081">ASTROVAN</option><option value="3002">AVALANCHE</option><option value="2644">BEL AIR</option><option value="2843">BERETTA</option><option value="658">BLAZER</option><option value="2082">BONANZA</option><option value="3432">BRASIL</option><option value="2083">BRASINCA</option><option value="2085">C10</option><option value="2086">C14</option><option value="2551">C15</option><option value="2087">C20</option><option value="2088">CALIBRA</option><option value="2089">CAMARO</option><option value="2090">CAPRICE</option><option value="2950">CAPTIVA SPORT</option><option value="2091">CARAVAN</option><option value="2092">CAVALIER</option><option value="1143">CELTA</option><option value="2093">CHEVELLE</option><option value="2094">CHEVETTE</option><option value="2802">CHEVY 500</option><option value="3117">CHEYENNE</option><option value="1237">CLASSIC</option><option value="3291">COBALT</option><option value="2789">COLORADO</option><option value="670">CORSA</option><option value="2096">CORSICA</option><option value="2097">CORVETTE</option><option value="3181">CORVETTE GRAND SPORT </option><option value="2915">COUPÉ</option><option value="3202">CRUZE</option><option value="2098">D10</option><option value="2099">D20</option><option value="2100">D40</option><option value="2841">DE LUXE</option><option value="3281">EL CAMINO</option><option value="2988">EQUINOX</option><option value="3372">EXPRESS</option><option value="2669">FLEETLINE</option><option value="2919">FLEETMASTER</option><option value="1053">GRAND BLAZER</option><option value="2973">HHR</option><option value="2101">IMPALA</option><option value="698">IPANEMA</option><option value="704">KADETT</option><option value="2102">LUMINA</option><option value="3132">MALIBU</option><option value="2103">MARAJÓ</option><option value="2879">MASTER</option><option value="1182">MERIVA</option><option value="1221">MONTANA</option><option value="3082">MONTE CARLO</option><option value="2105">MONZA</option><option value="739">OMEGA</option><option value="3340">ONIX</option><option value="2106">OPALA</option><option value="2107">PICKUP</option><option value="2752">PRISMA</option><option value="2585">RAMONA</option><option value="761">S10</option><option value="2108">SATURN</option><option value="789">SILVERADO</option><option value="3316">SONIC</option><option value="1021">SPACE VAN</option><option value="3323">SPIN</option><option value="2756">SPORT VAN</option><option value="2109">SS</option><option value="2582">SSR</option><option value="3302">STYLELINE</option><option value="2110">SUBURBAN</option><option value="2111">SUPREMA</option><option value="2112">SYCLONE</option><option value="3242">TAHOE</option><option value="1025">TIGRA</option><option value="1158">TRACKER</option><option value="2113">TRAFIC</option><option value="3152">TRAILBLAZER</option><option value="3208">TRAVERSE </option><option value="3278">VAN G20</option><option value="783">VECTRA</option><option value="3027">VEGA</option><option value="2114">VERANEIO</option><option value="1161">ZAFIRA</option></select>
<!-- Numero da Placa -->	
<!--Abaixo Campo Texto: -->					
<input type="text" NumeroPlaca ="nome" size="35" value=""><br><br>
<!-- Cor -->						
Cor:<span style="padding-left:115px"> <br>
<!--Abaixo Campo Texto: -->
<input type="text" Cor ="nome" size="35" value=""><br><br>