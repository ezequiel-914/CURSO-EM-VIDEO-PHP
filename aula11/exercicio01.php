<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX011</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <h1 style="font-size: 50px; text-align: center; font-family: Arial, Helvetica, sans-serif;">Contador:</h1>
        <?php
            $c = 1;
            while ($c<=10){
                echo "<br/>$c";
                $c ++;
            }
        ?>
    </div>
</body>
</html>