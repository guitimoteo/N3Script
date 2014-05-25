<?php

class Datasource {

        var $dbLink;
       /**
        * Construtor. Chamar quando inicializar o sistema.
        * Salve uma instancia em uma variável $connection
        * e passe como argumento quando utilizar.
        */
       function Datasource($dbHost, $dbName, $dbuser, $dbpasswd) {
                $this->dbLink = mysql_connect ($dbHost, $dbuser, $dbpasswd);
                mysql_select_db ($dbName, $this->dbLink);
	}

/**
 * Executa o sql.
 * Exemplo: Datasource::executaSql("SELECT * FROM tb_cep");
 * @param type $sql
 * @return type
 */
        function executaSql($sql) {

                $resultado = mysql_query($sql, $this->dbLink);
                $this->checaErros($sql);

                return $resultado;
        }


        function executaSimples($sql) {
                $result = mysql_query($sql, $this->dbLink);

                return $result;
        }


        function nextRow ($result) {
                $row = mysql_fetch_array($result);

                return $row;
        }


        function checaErros($sql) {

                $err=mysql_error();
                $errno=mysql_errno();

                if($errno) {
                        $message = "O comando de sql ".$sql." causou o erro: ".$err.".";

                        print "Um erro ocorreu.";
                        print "Por favor, contate o administrador da página \n";
                        print "<!-- ".$message." -->\n";
                        exit;

                } else {
                        return;
                }
        }
}

?>
