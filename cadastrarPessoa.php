<?php
include './Persistencia/Pessoa.php';
include './Persistencia/PessoaDao.php';
include './Persistencia/Datasource.php';

$datasource = new Datasource('localhost', 'estacionamento', 'root', '');
$pessoa = new Pessoa();
$pessoaDao = new PessoaDao();

$codigoIn = $_POST['Codigo'];
$cpfIn = $_POST['cpf'];
$nomeIn = $_POST['nome'];
$enderecoIn = $_POST['endereco'];
$bairroIn = $_POST['bairro'];
$cepIn = $_POST['cep'];
$emailIn = $_POST['E-mail'];
$sexoIn = $_POST['sexo'];
$numeroIn = $_POST['NComp'];
$cidadeIn = $_POST['cidade'];
$telefoneIn = $_POST['telefone'];
$celularIn = $_POST['Celular'];
$ufIn = $_POST['estado'];

if(isset($codigoIn) && isset($cpfIn) && isset($nomeIn) && isset($sexoIn) 
        && isset($enderecoIn) && isset($bairroIn) && isset($cidadeIn) && isset($ufIn)
        && isset($cepIn) && isset($nomeIn) && isset($numeroIn)
        && isset($emailIn) && isset($telefoneIn)){

$pessoa->setTudo($codigoIn, $cpfIn, $nomeIn, $enderecoIn, $bairroIn, $cepIn, 
                 $emailIn, $sexoIn, $numeroIn, $cidadeIn, $telefoneIn, $celularIn, 
                 $ufIn);
if($pessoaDao->inserir($datasource, $pessoa)){
    echo 'Usuário cadastrado com sucesso';
echo '<META http-equiv="refresh" content="1; Url=cadastroUsuario.php"> ';}
else{
echo 'Erro ao cadastrar o usuário';
echo '<META http-equiv="refresh" content="1; Url=cadastroUsuario.php"> ';
}
        }  else {
            echo "Por favor, complete todos os campos";            
}
        

?>