<!-- Anatomia de uma divisão -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Média</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $valor1 = $_GET['valor1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 1;
        $peso2 = $_GET['peso2'] ?? 1;
    ?>

    <div class="container">
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">Valor 1:</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">

            <label for="peso1">Peso 1:</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
            
            <label for="valor2">Valor 2:</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">

            <label for="peso2">Peso 2:</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">

            <input type="submit" value="Calcular">
        </form>

        <br>
        <h1>Resultado</h1>
        <?php 
            $mediaSimples = ($valor1 + $valor2) / 2; 
            $mediaPonderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2); 

            echo "<p>Analisando os valores: $valor1 e $valor2, temos:</p>";

            echo
                "<ul>
                    <li>A <strong>média aritmética simples</strong> dos valores é: <strong>" . 
                    number_format($mediaSimples, 2, ",", ".") . "</strong></li>
                    <li>A <strong>média aritmética ponderada</strong> dos valores é: <strong>" .
                    number_format($mediaPonderada, 2, ",", ".") . "</strong></li>
                </ul>"
        ?>
    </div>
</body>

</html>