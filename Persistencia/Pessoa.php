<?php
class Pessoa {


    var $codigo;
    var $cpf;
    var $nome;
    var $endereco;
    var $bairro;
    var $cep;
    var $email;
    var $sexo;
    var $numero;
    var $cidade;
    var $telefone;
    var $celular;
    var $uf;


    function Pessoa () {

    }

    /* function Pessoa ($codigoIn) {

          $this->codigo = $codigoIn;

    } */



    function getCodigo() {
          return $this->codigo;
    }
    function setCodigo($codigoIn) {
          $this->codigo = $codigoIn;
    }

    function getCpf() {
          return $this->cpf;
    }
    function setCpf($cpfIn) {
          $this->cpf = $cpfIn;
    }

    function getNome() {
          return $this->nome;
    }
    function setNome($nomeIn) {
          $this->nome = $nomeIn;
    }

    function getEndereco() {
          return $this->endereco;
    }
    function setEndereco($enderecoIn) {
          $this->endereco = $enderecoIn;
    }

    function getBairro() {
          return $this->bairro;
    }
    function setBairro($bairroIn) {
          $this->bairro = $bairroIn;
    }

    function getCep() {
          return $this->cep;
    }
    function setCep($cepIn) {
          $this->cep = $cepIn;
    }

    function getEmail() {
          return $this->email;
    }
    function setEmail($emailIn) {
          $this->email = $emailIn;
    }

    function getSexo() {
          return $this->sexo;
    }
    function setSexo($sexoIn) {
          $this->sexo = $sexoIn;
    }

    function getNumero() {
          return $this->numero;
    }
    function setNumero($numeroIn) {
          $this->numero = $numeroIn;
    }

    function getCidade() {
          return $this->cidade;
    }
    function setCidade($cidadeIn) {
          $this->cidade = $cidadeIn;
    }

    function getTelefone() {
          return $this->telefone;
    }
    function setTelefone($telefoneIn) {
          $this->telefone = $telefoneIn;
    }

    function getCelular() {
          return $this->celular;
    }
    function setCelular($celularIn) {
          $this->celular = $celularIn;
    }

    function getUf() {
          return $this->uf;
    }
    function setUf($ufIn) {
          $this->uf = $ufIn;
    }


    function setTudo($codigoIn,
          $cpfIn,
          $nomeIn,
          $enderecoIn,
          $bairroIn,
          $cepIn,
          $emailIn,
          $sexoIn,
          $numeroIn,
          $cidadeIn,
          $telefoneIn,
          $celularIn,
          $ufIn) {
          $this->codigo = $codigoIn;
          $this->cpf = $cpfIn;
          $this->nome = $nomeIn;
          $this->endereco = $enderecoIn;
          $this->bairro = $bairroIn;
          $this->cep = $cepIn;
          $this->email = $emailIn;
          $this->sexo = $sexoIn;
          $this->numero = $numeroIn;
          $this->cidade = $cidadeIn;
          $this->telefone = $telefoneIn;
          $this->celular = $celularIn;
          $this->uf = $ufIn;
    }



    function hasEqualMapping($pessoaVO) {

          if ($pessoaVO->getCodigo() != $this->codigo) {
                    return(false);
          }
          if ($pessoaVO->getCpf() != $this->cpf) {
                    return(false);
          }
          if ($pessoaVO->getNome() != $this->nome) {
                    return(false);
          }
          if ($pessoaVO->getEndereco() != $this->endereco) {
                    return(false);
          }
          if ($pessoaVO->getBairro() != $this->bairro) {
                    return(false);
          }
          if ($pessoaVO->getCep() != $this->cep) {
                    return(false);
          }
          if ($pessoaVO->getEmail() != $this->email) {
                    return(false);
          }
          if ($pessoaVO->getSexo() != $this->sexo) {
                    return(false);
          }
          if ($pessoaVO->getNumero() != $this->numero) {
                    return(false);
          }
          if ($pessoaVO->getCidade() != $this->cidade) {
                    return(false);
          }
          if ($pessoaVO->getTelefone() != $this->telefone) {
                    return(false);
          }
          if ($pessoaVO->getCelular() != $this->celular) {
                    return(false);
          }
          if ($pessoaVO->getUf() != $this->uf) {
                    return(false);
          }

          return true;
    }


    function toString() {
        $out = $out."\n Mapeando a tabela pessoa\n";
        $out = $out."Atributos: \n"; 
        $out = $out."codigo = ".$this->codigo."\n"; 
        $out = $out."cpf = ".$this->cpf."\n"; 
        $out = $out."nome = ".$this->nome."\n"; 
        $out = $out."endereco = ".$this->endereco."\n"; 
        $out = $out."bairro = ".$this->bairro."\n"; 
        $out = $out."cep = ".$this->cep."\n"; 
        $out = $out."email = ".$this->email."\n"; 
        $out = $out."sexo = ".$this->sexo."\n"; 
        $out = $out."numero = ".$this->numero."\n"; 
        $out = $out."cidade = ".$this->cidade."\n"; 
        $out = $out."telefone = ".$this->telefone."\n"; 
        $out = $out."celular = ".$this->celular."\n"; 
        $out = $out."uf = ".$this->uf."\n"; 
        return $out;
    }

}

?>