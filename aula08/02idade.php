<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php

            $nome = $_GET["nome"];
            $ano = $_GET["ano"];
            $sex = $_GET["sexo"];
            $idade = date("Y") - $ano;
            
            echo "O nome enviado foi $nome";
            echo "<br/>O ano enviado foi $ano";
            echo "<br/>O sexo enviado foi $sex";
            echo "<br/>E vc tem $idade anos!";
        ?>
 
    </div>   
</body>
</html>