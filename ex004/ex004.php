<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        $num = 300; //váriavel int em decimal
        $num = 0x1A; //váriavel int em hexadecimal
        $num = 0b1010; //váriavel int em binário
        $num = 010; //váriavel int em octal
        echo "O valor da váriavel é: $num";

        # $v = 300;
        # var_dump($v); usado para checar tiopo primitivo da váriavel

        $v = (int) "300"; //usado para fazer a conversão do tipo primitivo
        var_dump($v);
    ?>
</body>
</html>