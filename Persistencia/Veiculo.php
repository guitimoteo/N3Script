<?php

class Veiculo {

    /** 
     * Persistent Instance variables. This data is directly 
     * mapped to the columns of database table.
     */
    var $identificador;
    var $marca;
    var $modelo;
    var $placa;
    var $cor;


/**
 * Construtor sem a chave primária da tabela Veiculo
 */
    function Veiculo () {

    }

    /* function Veiculo ($identificadorIn) {

          $this->identificador = $identificadorIn;

    } */



    function getIdentificador() {
          return $this->identificador;
    }
    function setIdentificador($identificadorIn) {
          $this->identificador = $identificadorIn;
    }

    function getMarca() {
          return $this->marca;
    }
    function setMarca($marcaIn) {
          $this->marca = $marcaIn;
    }

    function getModelo() {
          return $this->modelo;
    }
    function setModelo($modeloIn) {
          $this->modelo = $modeloIn;
    }

    function getPlaca() {
          return $this->placa;
    }
    function setPlaca($placaIn) {
          $this->placa = $placaIn;
    }

    function getCor() {
          return $this->cor;
    }
    function setCor($corIn) {
          $this->cor = $corIn;
    }




    function setTudo($identificadorIn,
          $marcaIn,
          $modeloIn,
          $placaIn,
          $corIn) {
          $this->identificador = $identificadorIn;
          $this->marca = $marcaIn;
          $this->modelo = $modeloIn;
          $this->placa = $placaIn;
          $this->cor = $corIn;
    }



    function hasEqualMapping($valueObject) {

          if ($valueObject->getIdentificador() != $this->identificador) {
                    return(false);
          }
          if ($valueObject->getMarca() != $this->marca) {
                    return(false);
          }
          if ($valueObject->getModelo() != $this->modelo) {
                    return(false);
          }
          if ($valueObject->getPlaca() != $this->placa) {
                    return(false);
          }
          if ($valueObject->getCor() != $this->cor) {
                    return(false);
          }

          return true;
    }



    function toString() {

        $out = $out."\nMapeando a tabela Veiculo\n";
        $out = $out."Atributos: \n"; 
        $out = $out."identificador = ".$this->identificador."\n"; 
        $out = $out."marca = ".$this->marca."\n"; 
        $out = $out."modelo = ".$this->modelo."\n"; 
        $out = $out."placa = ".$this->placa."\n"; 
        $out = $out."cor = ".$this->cor."\n"; 
        return $out;
    }

}

?>