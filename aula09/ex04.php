<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            $m = ($n1+$n2)/2;
                echo "A media entre <strong>$n1</strong> e <strong>$n2</strong> é igual a <strong>$m</strong>";
                    if ($m < 5){
                        $sit = "REPROVADO";
                    } elseif ($m > 5 && $m < 7) {
                        $sit = "RECUPERAÇAO";
                    } else {
                        $sit = "APROVADO";
                    }

                echo "<br/>Situaçao do aluno: <strong>$sit</strong>" ;
        ?>
        <br/>
        <a class="link" href="exercicio04.html">Voltar</a>
    </div>
</body>
</html>