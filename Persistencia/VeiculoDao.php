<?php

class VeiculoDao {



    function createValueObject() {
          return new Veiculo();
    }


    function getObject(&$conn, $identificador) {

          $valueObject = $this->createValueObject();
          $valueObject->setIdentificador($identificador);
          $this->carregar(&$conn, &$valueObject);
          return $valueObject;
    }



    function carregar(&$conn, &$valueObject) {

        
          if (!$valueObject->getIdentificador()) {
               return false;
          }

          $sql = "SELECT * FROM Veiculo WHERE (Identificador = '".$valueObject->getIdentificador()."') "; 

          if ($this->pesquisar(&$conn, $sql, &$valueObject))
               return true;
          else
               return false;
    }



    function carregarTudo(&$conn) {


          $sql = "SELECT * FROM Veiculo ORDER BY Identificador ASC ";

          $searchResults = $this->listar(&$conn, $sql);

          return $searchResults;
    }



    function inserir(&$conn, &$valueObject) {

          $sql = "INSERT INTO Veiculo ( Identificador, Marca, Modelo, ";
          $sql = $sql."Placa, Cor) VALUES ('".$valueObject->getIdentificador()."', ";
          $sql = $sql."'".$valueObject->getMarca()."', ";
          $sql = $sql."'".$valueObject->getModelo()."', ";
          $sql = $sql."'".$valueObject->getPlaca()."', ";
          $sql = $sql."'".$valueObject->getCor()."') ";
          $result = $this->atualizarBanco(&$conn, $sql);


          return true;
    }


    function atualizar(&$conn, &$valueObject) {

          $sql = "UPDATE Veiculo SET Marca = '".$valueObject->getMarca()."', ";
          $sql = $sql."Modelo = '".$valueObject->getModelo()."', ";
          $sql = $sql."Placa = '".$valueObject->getPlaca()."', ";
          $sql = $sql."Cor = '".$valueObject->getCor()."'";
          $sql = $sql." WHERE (Identificador = '".$valueObject->getIdentificador()."') ";
          $result = $this->atualizarBanco(&$conn, $sql);

          if ($result != 1) {
                return false;
          }

          return true;
    }


    function deletar(&$conn, &$valueObject) {


          if (!$valueObject->getIdentificador()) {
               //print "Can not delete without Primary-Key!";
               return false;
          }

          $sql = "DELETE FROM Veiculo WHERE (Identificador = '".$valueObject->getIdentificador()."') ";
          $result = $this->atualizarBanco(&$conn, $sql);

          if ($result != 1) {
               //print "PrimaryKey Error when updating DB!";
               return false;
          }
          return true;
    }


    function deletarTudo(&$conn) {

          $sql = "DELETE FROM Veiculo";
          $result = $this->atualizarBanco(&$conn, $sql);

          return true;
    }

    function contar(&$conn) {

          $sql = "SELECT count(*) FROM Veiculo";
          $allRows = 0;

          $result = $conn->executaSql($sql);

          if ($row = $conn->nextRow($result))
                $allRows = $row[0];

          return $allRows;
    }


    function pesquisarVeiculoIgual(&$conn, &$valueObject) {

          $first = true;
          $sql = "SELECT * FROM Veiculo WHERE 1=1 ";

          if ($valueObject->getIdentificador() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND Identificador LIKE '".$valueObject->getIdentificador()."%' ";
          }

          if ($valueObject->getMarca() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND Marca LIKE '".$valueObject->getMarca()."%' ";
          }

          if ($valueObject->getModelo() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND Modelo LIKE '".$valueObject->getModelo()."%' ";
          }

          if ($valueObject->getPlaca() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND Placa LIKE '".$valueObject->getPlaca()."%' ";
          }

          if ($valueObject->getCor() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND Cor LIKE '".$valueObject->getCor()."%' ";
          }


          $sql = $sql."ORDER BY Identificador ASC ";
          
          if ($first)
               return array();

          $searchResults = $this->listar(&$conn, $sql);

          return $searchResults;
    }




    function atualizarBanco(&$conn, &$sql) {

          $result = $conn->executaSql($sql);

          return $result;
    }



    function pesquisar(&$conn, &$sql, &$valueObject) {

          $result = $conn->executaSql($sql);

          if ($row = $conn->nextRow($result)) {

                   $valueObject->setIdentificador($row[0]); 
                   $valueObject->setMarca($row[1]); 
                   $valueObject->setModelo($row[2]); 
                   $valueObject->setPlaca($row[3]); 
                   $valueObject->setCor($row[4]); 
          } else {
              
              return false;
          }
          return true;
    }

    function listar(&$conn, &$sql) {

          $searchResults = array();
          $result = $conn->executaSql($sql);

          while ($row = $conn->nextRow($result)) {
               $temp = $this->createValueObject();

               $temp->setIdentificador($row[0]); 
               $temp->setMarca($row[1]); 
               $temp->setModelo($row[2]); 
               $temp->setPlaca($row[3]); 
               $temp->setCor($row[4]); 
               array_push($searchResults, $temp);
          }

          return $searchResults;
    }
}

?>