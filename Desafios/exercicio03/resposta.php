<!-- Criar conversor de moeda -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <h1>Resultado Final</h1>
        <?php 
            $reais = $_GET["valor"];
            $cotacao = 5.11;
            $dolares = $reais / $cotacao;

            //Forma padrão
            //echo "R$" . number_format($reais, 2, ",", ".") . " é equivalente a $". number_format($dolares, 2, ",", ".");

            //Também é possível criar internacionalização para esse código
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo numfmt_format_currency($padrao, $reais, "BRL") . " é equivalente a " . 
                numfmt_format_currency($padrao, $dolares, "USD");
        
        ?>

        <br>
        <button onclick="javascript: window.location.href='index.html'">Voltar</button>
    </div>
</body>
</html>