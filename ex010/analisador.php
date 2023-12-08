<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANALISADOR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisando um numero real</h1>
        <?php 
            $num = $_POST["num"] ?? 0;

            echo "<p>Analisando o numero " . number_format($num, 3, ",", ".") . " informado:</p>";

            $int = (int)$num;
            $fra = $num - $int;

            echo "<ul>
            <li>
            A parte inteira é <strong>".number_format($int, 0, ",", ".")."</strong>
            </li>
            ";
            echo "<li>A parte fracionária é <strong>".number_format($fra, 3, ",", ".")."</strong></li>"
        ?>
    </main>
</body>
</html>