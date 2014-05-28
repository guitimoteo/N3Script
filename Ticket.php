<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './Persistencia/Datasource.php';
        include './Persistencia/Pessoa.php';
        include './Persistencia/PessoaDao.php';
        $datasource = new Datasource('localhost', 'estacionamento', 'root', '');
        $pessoa = new Pessoa();
        $pessoaDao = new PessoaDao();
        
        $resultado = $pessoaDao->listar($datasource, $sql);
        $resultado
        ?>
        <form method="post" action="">
            <input type="" name="">
            <select name="Usuario">
                <option value="Escolha o Usuário">Escolha o usuário</option>
                <?
                for
                ?>
            </select>
        
            
        </form>
        
    </body>
</html>
