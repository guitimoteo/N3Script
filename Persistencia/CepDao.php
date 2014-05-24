<?php

class CepDao {
    var $conexao; 

    function criaCepVO() {
          return new Cep();
    }

    function setConexao(&$conn) {
        $this->conexao = &$conn;
    }
    
    function getObject(&$conn, $cep) {
      
          $cepVO = $this->criaCepVO();
          $cepVO->setCep($cep);
          $this->carregar(&$conn, &$cepVO);
          return $cepVO;
    }


    function carregar(&$conn, &$cepVO) {

          if (!$cepVO->getCep()) {
               return false;
          }

          $sql = "SELECT * FROM tb_cep WHERE (cep = '".$cepVO->getCep()."') "; 

          if ($this->consultaSimples(&$conn, $sql, &$cepVO))
               return true;
          else
               return false;
    }

    function carregarTodos(&$conn) {


          $sql = "SELECT * FROM tb_cep ORDER BY cep ASC ";

          $searchResults = $this->listar(&$conn, $sql);

          return $searchResults;
    }



    function inserir(&$conn, &$cepVO) {

          $sql = "INSERT INTO tb_cep ( cep, endereco, cidade, ";
          $sql = $sql."bairro, uf) VALUES ('".$cepVO->getCep()."', ";
          $sql = $sql."'".$cepVO->getEndereco()."', ";
          $sql = $sql."'".$cepVO->getCidade()."', ";
          $sql = $sql."'".$cepVO->getBairro()."', ";
          $sql = $sql."'".$cepVO->getUf()."') ";
          $result = $this->atualizarBanco(&$conn, $sql);


          return true;
    }


    function atualizar(&$conn, &$cepVO) {

          $sql = "UPDATE tb_cep SET endereco = '".$cepVO->getEndereco()."', ";
          $sql = $sql."cidade = '".$cepVO->getCidade()."', ";
          $sql = $sql."bairro = '".$cepVO->getBairro()."', ";
          $sql = $sql."uf = '".$cepVO->getUf()."'";
          $sql = $sql." WHERE (cep = '".$cepVO->getCep()."') ";
          $result = $this->atualizarBanco(&$conn, $sql);

          if ($result != 1) {
               //print "PrimaryKey Error when updating DB!";
               return false;
          }

          return true;
    }


    function deletar(&$conn, &$cepVO) {


          if (!$cepVO->getCep()) {
               //print "Can not delete without Primary-Key!";
               return false;
          }

          $sql = "DELETE FROM tb_cep WHERE (cep = '".$cepVO->getCep()."') ";
          $result = $this->atualizarBanco(&$conn, $sql);

          if ($result != 1) {
               //print "PrimaryKey Error when updating DB!";
               return false;
          }
          return true;
    }


    function deletarTodos(&$conn) {

          $sql = "DELETE FROM tb_cep";
          $result = $this->atualizarBanco(&$conn, $sql);

          return $result;
    }


/**
 * Pesquisa e retorna um objeto parecido no banco de dados.
 * Exemplo: 
 * $cepVO.setCep("11111-111");
 * pesquisarCepIgual($cepVO);
 * @param type $conn
 * @param type $cepVO
 * @return type
 */
    function pesquisarCepIgual(&$conn, &$cepVO) {

          $first = true;
          $sql = "SELECT * FROM tb_cep WHERE 1=1 ";

          if ($cepVO->getCep() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND cep LIKE '".$cepVO->getCep()."%' ";
          }

          if ($cepVO->getEndereco() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND endereco LIKE '".$cepVO->getEndereco()."%' ";
          }

          if ($cepVO->getCidade() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND cidade LIKE '".$cepVO->getCidade()."%' ";
          }

          if ($cepVO->getBairro() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND bairro LIKE '".$cepVO->getBairro()."%' ";
          }

          if ($cepVO->getUf() != "") {
              if ($first) { $first = false; }
              $sql = $sql."AND uf LIKE '".$cepVO->getUf()."%' ";
          }


          $sql = $sql."ORDER BY cep ASC ";

          if ($first)
               return array();

          $searchResults = $this->listar(&$conn, $sql);

          return $searchResults;
    }

    function atualizarBanco(&$conn, &$sql) {

          $result = $conn->executaSql($sql);

          return $result;
    }


    function consultaSimples(&$conn, &$sql, &$cepVO) {

          $result = $conn->executaSql($sql);

          if ($row = $conn->nextRow($result)) {

                   $cepVO->setCep($row[0]); 
                   $cepVO->setEndereco($row[1]); 
                   $cepVO->setCidade($row[2]); 
                   $cepVO->setBairro($row[3]); 
                   $cepVO->setUf($row[4]); 
          } else {
          return false;
          }
          return true;
    }


    function listar(&$conn, &$sql) {

          $resultadoPesquisa= array();
          $resultado = $conn->executaSql($sql);
          
          while ($row = $conn->nextRow($resultado)) {
               $temp = $this->criaCepVO();

               $temp->setCep($row[0]); 
               $temp->setEndereco($row[1]); 
               $temp->setCidade($row[2]); 
               $temp->setBairro($row[3]); 
               $temp->setUf($row[4]); 
               array_push($resultadoPesquisa, $temp);
          }

          return $resultadoPesquisa;
    }
}

?>
