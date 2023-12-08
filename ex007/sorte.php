<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SORTEADOR DE NUMERO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>Trabalhando com numeros</h1>
        <p>SORTEANDO UM NUMERO ENTRE 0 E 100</p>
        <p>
            <?php 
                $num = mt_rand(0,100);
                echo "Numero sorteado: $num";
            ?>
        </p>
        <button onclick="window.location.reload()">GERAR</button>
</main>   
</body>
</html>