<!-- Anatomia de uma divisão -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Salários Mínimos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $salarioMinimo = 1412.00;
        $salario = $_GET['salario'] ?? 0;     
    ?>

    <div class="container">
        <h1>Informe o Salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário:</label>
            <input type="number" name="salario" id="salario" value=<?=$salario?>>

            <p>Considerando o salário mínimo de <strong><?="R$" . number_format($salarioMinimo, 2, ",", ".")?></strong></p>

            <input type="submit" value="Dividir">
        </form>

        <br>
        <h1>Resultado</h1>
        <?php 
            $salariosMinimos = intdiv($salario, $salarioMinimo);
            $resto = $salario % $salarioMinimo;
        
            echo "Uma pessoa que recebe um sálario de R$" . number_format($salario, 2, ",", ".") . " ganha <strong>$salariosMinimos sálarios mínimos</strong> + <strong>R$" . number_format($resto, 2, ",", ".") . "</strong>";
        ?>
    </div>
</body>

</html>