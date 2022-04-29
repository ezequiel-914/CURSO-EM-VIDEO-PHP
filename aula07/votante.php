<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Op Relacionais</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
        
        $aa = $_GET["ano"];
        $nasc = $_GET["nc"];
        $idade = ($aa-$nasc);
        echo "Vc tem $idade anos.<br/>";
        $v = ($idade >=18 && $idade < 65 )? "Voce tem que botar sim caba safado": "Vota nao oia";
        echo "Situaçao: $v";



        ?>

    </div>
</body>
</html>