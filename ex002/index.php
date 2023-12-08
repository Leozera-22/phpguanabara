<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>EXEMPLO DE PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "HOJE É DIA " . date("d/M");
        echo " E HORA ATUAL É " . date("G:i:s");
    ?>

</body>
</html>