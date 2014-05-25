<?php
class PessoaDao {


    function createValueObject() {
          return new Pessoa();
    }


    function getObject(&$conn, $codigo) {

          $valueObject = $this->createValueObject();
          $valueObject->setCodigo($codigo);
          $this->carregar(&$conn, &$valueObject);
          return $valueObject;
    }

    function carregar(&$conn, &$valueObject) {

          if (!$valueObject->getCodigo()) {
               //print "Can not select without Primary-Key!";
               return false;
          }

          $sql = "SELECT * FROM Pessoa WHERE (codigo = '".$valueObject->getCodigo()."') "; 

          if ($this->pesquisar(&$conn, $sql, &$valueObject))
               return true;
          else
               return false;
    }


    function carregarTudo(&$conn) {


          $sql = "SELECT * FROM Pessoa ORDER BY codigo ASC ";

          $searchResults = $this->listar(&$conn, $sql);

          return $searchResults;
    }

    function inserir(&$conn, &$valueObject) {

          $sql = "INSERT INTO Pessoa ( codigo, cpf, nome, ";
          $sql = $sql."endereco, bairro, cep, ";
          $sql = $sql."email, sexo, numero, ";
          $sql = $sql."cidade, telefone, celular, ";
          $sql = $sql."uf) VALUES ('".$valueObject->getCodigo()."', ";
          $sql = $sql."'".$valueObject->getCpf()."', ";
          $sql = $sql."'".$valueObject->getNome()."', ";
          $sql = $sql."'".$valueObject->getEndereco()."', ";
          $sql = $sql."'".$valueObject->getBairro()."', ";
          $sql = $sql."'".$valueObject->getCep()."', ";
          $sql = $sql."'".$valueObject->getEmail()."', ";
          $sql = $sql."'".$valueObject->getSexo()."', ";
          $sql = $sql."'".$valueObject->getNumero()."', ";
          $sql = $sql."'".$valueObject->getCidade()."', ";
          $sql = $sql."'".$valueObject->getTelefone()."', ";
          $sql = $sql."'".$valueObject->getCelular()."', ";
          $sql = $sql."'".$valueObject->getUf()."') ";
          $result = $this->atualizarBanco(&$conn, $sql);


          return true;
    }

    function atualizar(&$conn, &$valueObject) {

          $sql = "UPDATE Pessoa SET cpf = '".$valueObject->getCpf()."', ";
          $sql = $sql."nome = '".$valueObject->getNome()."', ";
          $sql = $sql."endereco = '".$valueObject->getEndereco()."', ";
          $sql = $sql."bairro = '".$valueObject->getBairro()."', ";
          $sql = $sql."cep = '".$valueObject->getCep()."', ";
          $sql = $sql."email = '".$valueObject->getEmail()."', ";
          $sql = $sql."sexo = '".$valueObject->getSexo()."', ";
          $sql = $sql."numero = '".$valueObject->getNumero()."', ";
          $sql = $sql."cidade = '".$valueObject->getCidade()."', ";
          $sql = $sql."telefone = '".$valueObject->getTelefone()."', ";
          $sql = $sql."celular = '".$valueObject->getCelular()."', ";
          $sql = $sql."uf = '".$valueObject->getUf()."'";
          $sql = $sql." WHERE (codigo = '".$valueObject->getCodigo()."') ";
          $result = $this->atualizarBanco(&$conn, $sql);

          if ($result != 1) {
               return false;
          }

          return true;
    }


    function deletar(&$conn, &$valueObject) {


          if (!$valueObject->getCodigo()) {
               //print "Can not delete without Primary-Key!";
               return false;
          }

          $sql = "DELETE FROM Pessoa WHERE (codigo = '".$valueObject->getCodigo()."') ";
          $result = $this->atualizarBanco(&$conn, $sql);

          if ($result != 1) {
               //print "PrimaryKey Error when updating DB!";
               return false;
          }
          return true;
    }


    function deletarTudo(&$conn) {

          $sql = "DELETE FROM Pessoa";
          $result = $this->atualizarBanco(&$conn, $sql);

          return true;
    }


    function contar(&$conn) {

          $sql = "SELECT count(*) FROM Pessoa";
          $allRows = 0;

          $result = $conn->executaSql($sql);

          if ($row = $conn->nextRow($result))
                $allRows = $row[0];

          return $allRows;
    }


    function pesquisarPessoaIgual(&$conn, &$pessoaVO) {

          $first = true;
          $sql = "SELECT * FROM Pessoa WHERE 1=1 ";

          if ($pessoaVO->getCodigo() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND codigo LIKE '".$pessoaVO->getCodigo()."%' ";
          }

          if ($pessoaVO->getCpf() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND cpf LIKE '".$pessoaVO->getCpf()."%' ";
          }

          if ($pessoaVO->getNome() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND nome LIKE '".$pessoaVO->getNome()."%' ";
          }

          if ($pessoaVO->getEndereco() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND endereco LIKE '".$pessoaVO->getEndereco()."%' ";
          }

          if ($pessoaVO->getBairro() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND bairro LIKE '".$pessoaVO->getBairro()."%' ";
          }

          if ($pessoaVO->getCep() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND cep LIKE '".$pessoaVO->getCep()."%' ";
          }

          if ($pessoaVO->getEmail() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND email LIKE '".$pessoaVO->getEmail()."%' ";
          }

          if ($pessoaVO->getSexo() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND sexo LIKE '".$pessoaVO->getSexo()."%' ";
          }

          if ($pessoaVO->getNumero() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND numero LIKE '".$pessoaVO->getNumero()."%' ";
          }

          if ($pessoaVO->getCidade() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND cidade LIKE '".$pessoaVO->getCidade()."%' ";
          }

          if ($pessoaVO->getTelefone() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND telefone LIKE '".$pessoaVO->getTelefone()."%' ";
          }

          if ($pessoaVO->getCelular() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND celular LIKE '".$pessoaVO->getCelular()."%' ";
          }

          if ($pessoaVO->getUf() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND uf LIKE '".$pessoaVO->getUf()."%' ";
          }


          $sql = $sql."ORDER BY codigo ASC ";

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

                   $valueObject->setCodigo($row[0]); 
                   $valueObject->setCpf($row[1]); 
                   $valueObject->setNome($row[2]); 
                   $valueObject->setEndereco($row[3]); 
                   $valueObject->setBairro($row[4]); 
                   $valueObject->setCep($row[5]); 
                   $valueObject->setEmail($row[6]); 
                   $valueObject->setSexo($row[7]); 
                   $valueObject->setNumero($row[8]); 
                   $valueObject->setCidade($row[9]); 
                   $valueObject->setTelefone($row[10]); 
                   $valueObject->setCelular($row[11]); 
                   $valueObject->setUf($row[12]); 
          } else {
               //print " Object Not Found!";
               return false;
          }
          return true;
    }


    function listar(&$conn, &$sql) {

          $resultadoPesquisa = array();
          $resultado = $conn->executaSql($sql);

          while ($row = $conn->nextRow($resultado)) {
               $temp = $this->createValueObject();

               $temp->setCodigo($row[0]); 
               $temp->setCpf($row[1]); 
               $temp->setNome($row[2]); 
               $temp->setEndereco($row[3]); 
               $temp->setBairro($row[4]); 
               $temp->setCep($row[5]); 
               $temp->setEmail($row[6]); 
               $temp->setSexo($row[7]); 
               $temp->setNumero($row[8]); 
               $temp->setCidade($row[9]); 
               $temp->setTelefone($row[10]); 
               $temp->setCelular($row[11]); 
               $temp->setUf($row[12]); 
               array_push($resultadoPesquisa, $temp);
          }

          return $resultadoPesquisa;
    }
}

?>