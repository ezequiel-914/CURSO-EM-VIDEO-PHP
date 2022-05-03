<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>

        <?php
            $num = $_GET["num"];
            
            for ($c=1;$c<=$num;$c++){
                 if ($num%$c==0){
                    $primo++;                
                }
            }
            if ($primo<=2){
                    $confirm=" não é número primo!";    
                    }else {
                    $confirm = "é numero primo!";
                    }   
            echo "$num $confirm";
        ?>
    </div>
</body>
</html>