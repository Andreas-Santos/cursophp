<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Váriaveis e Constantes</title>
</head>
<body>
    <?php 
        $nome = "Pedro"; //sintaxe de uma váriavel do tipo String
        $sobrenome = "Moreira";
        const PAIS = "Brasil"; //sintaxe de uma constante do tipo String

        echo "$nome $sobrenome! Você mora no " . PAIS;
        
        #É possível sobrepor o conteúdo de váriaveis
        $nome = "José";
        $sobrenome = "Silva";
        echo "<br>$nome $sobrenome!";

        $nome = "Andreas"; //sintaxe de uma váriavel do String
        $idade = 23; //sintaxe de uma váriavel do tipo int
        $altura = 1.80; //sintaxe de uma váriavel do tipo float
        $casado = false; //sintaxe de uma váriavel do tipo boolean
        ?>
</body>
</html>