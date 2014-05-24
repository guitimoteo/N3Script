<?php

class Cep {

    var $cep;
    var $endereco;
    var $cidade;
    var $bairro;
    var $uf;

    function Cep () {

    }

    /* function Cep ($cepIn) {

          $this->cep = $cepIn;

    } */



    function getCep() {
          return $this->cep;
    }
    function setCep($cepIn) {
          $this->cep = $cepIn;
    }

    function getEndereco() {
          return $this->endereco;
    }
    function setEndereco($enderecoIn) {
          $this->endereco = $enderecoIn;
    }

    function getCidade() {
          return $this->cidade;
    }
    function setCidade($cidadeIn) {
          $this->cidade = $cidadeIn;
    }

    function getBairro() {
          return $this->bairro;
    }
    function setBairro($bairroIn) {
          $this->bairro = $bairroIn;
    }

    function getUf() {
          return $this->uf;
    }
    function setUf($ufIn) {
          $this->uf = $ufIn;
    }

    function setTudo($cepIn,
          $enderecoIn,
          $cidadeIn,
          $bairroIn,
          $ufIn) {
          $this->cep = $cepIn;
          $this->endereco = $enderecoIn;
          $this->cidade = $cidadeIn;
          $this->bairro = $bairroIn;
          $this->uf = $ufIn;
    }


    function hasEqualMapping($valueObject) {

          if ($valueObject->getCep() != $this->cep) {
                    return(false);
          }
          if ($valueObject->getEndereco() != $this->endereco) {
                    return(false);
          }
          if ($valueObject->getCidade() != $this->cidade) {
                    return(false);
          }
          if ($valueObject->getBairro() != $this->bairro) {
                    return(false);
          }
          if ($valueObject->getUf() != $this->uf) {
                    return(false);
          }

          return true;
    }



    function toString() {
        $out = $out."\nMapeamento da tabela tb_cep\n";
        $out = $out."Atributos: \n"; 
        $out = $out."cep = ".$this->cep."\n"; 
        $out = $out."endereco = ".$this->endereco."\n"; 
        $out = $out."cidade = ".$this->cidade."\n"; 
        $out = $out."bairro = ".$this->bairro."\n"; 
        $out = $out."uf = ".$this->uf."\n"; 
        return $out;
    }



}

?>
