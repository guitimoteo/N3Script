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

        <form method="post">
            Código do usuário: <input type="text" name="usuario" required pattern="\d*" title="somente numeros"/>&nbsp;&nbsp;&nbsp;
            Código do veículo: <input type="text" name="veiculo" required pattern="\d*"  title="somente numeros"/>       
            <br>
            
            <input type="submit" formaction="cadastrarEntrada.php" value="Entrada"/>&nbsp;&nbsp;&nbsp;
            <input type="submit" formaction="cadastrarSaida.php" value="Saida"/>
        </form>
        
    </body>
</html>
