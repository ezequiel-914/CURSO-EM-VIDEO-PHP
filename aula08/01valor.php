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

            $valor = $_GET["v"];
            $raiz = sqrt($valor);
            
            echo "O valor enviado foi $valor";
            echo "<br/>A <i><strong>RAIZ QUADRADA</strong></i> dele é: ". number_format($raiz,2);

        ?>
    <a href="01exercicio.html">Voltar</a>
    </div>   
</body>
</html>