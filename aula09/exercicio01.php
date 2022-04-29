<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
        $a =isset ($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y")-$a;
        echo "Voce nasceu em $a";
        echo "<br/>Voce tem $i anos.";
       

       ?>
    <a href="exercicio01">Voltar</a>
    </div>
    
</body>
</html>