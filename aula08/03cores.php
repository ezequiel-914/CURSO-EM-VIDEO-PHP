<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = isset($_GET["t"])?$_GET["t"]: "Texto Generico";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
        $tam = isset($_GET["tam"])?$_GET["tam"]: "12pt";
    ?>
<style>
    span.texto{
        font-size: <?php echo $tam;?>;
        color: <?php echo $cor;?>;
    }
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
           echo "<span class='texto'>$txt</span>";


        ?>
    </div>   
</body>
</html>