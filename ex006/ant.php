<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANTECESSOR E SUCESSOR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Mostrando SUCESSOR E ANTECESSOR</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"] ?? "sem numero";
            $suc = $numero + 1;
            $ant = $numero - 1;
            echo "<p> NUMERO DIGITADO: $numero \n";
            echo "<p>NUMERO SUCESSOR DE é $suc</p> \n";
            echo "<p>NUMERO ANTECESSOR DE é $ant</p> \n";

        ?>

        <p><a href="javascript:history.go(-1)">Voltar página</a></p>
    </main>
</body>
</html>