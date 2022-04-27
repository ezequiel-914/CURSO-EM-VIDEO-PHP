<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somador</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
    <?php
    
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $s = $n1+$n2;
        echo "<h1>Valores recebidos: $n1, $n2 </h1>";
        echo "A soma entre $n1 e $n2 vale ". ($n1+$n2);



     ?>
     </div>   
</body>
</html>