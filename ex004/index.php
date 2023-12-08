<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRINGS</title>
</head>
<body>
    <p>
        // double quoted (aspas duplas)
        "CURSO" . "PHP" -> CONCATENAÇÃO -> "CURSOPHP"
        // single quoted (aspas simples)
        NÃO TEM INTERPRETAÇÃO 
        // heredoc
        // nowdoc
        // CONST NÃO TEM INTERPOLAÇÃO -> USA CONCATENAÇÃO
    </p>
    <?php 
    $nom = "Rodrigo";
    $snom = "Nogueira";
    echo "$nom \"Minotauro\" $snom";
    ?>

    <p>
        sequencias de escape para aspas duplas:
        \n -> NOVA LINHA
        \t    TABULAÇÃO
        \\    BARRA INVERTIDA  
        \$    MOSTRAR CIFRÃO
        \u{}  MOSTRAR CÓDIGO UNICODE
    </p>
</body>
</html>