<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de String</title>
</head>
<body>
    <?php 
        $carro = "Kwid";
        const MARCA = "Renault";
        echo "O modelo do carro é um $carro\u{1F697}<br>"; //a string em formato double quoted é processada
        echo 'O modelo do carro é um $carro\u{1F697}<br>'; //a string em formato single quoted não é processada

        echo "A marca do carro é " . MARCA . " e o modelo $carro<br>"; //para as constantes é possível concatenar o conteúdo junto com a string

        echo "Estamos no ano de " . date('Y'); //para as funções é preciso concatenar a informação com a string
    ?>
</body>
</html>