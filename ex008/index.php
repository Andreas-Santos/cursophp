<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>

    <main>
        <div class="container">
            <h1>Realize a soma</h1>

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="v1">Valor 1:</label>
                <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">

                <label for="v2">Valor 2:</label>
                <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">

                <input type="submit" value="Calcular">
            </form>
        </div>
    </main>

    <section>
        <div class="container">
            <h1>Resultado</h1>

            <?php 
                $soma = $valor1 + $valor2;

                echo "<p>O resultado da soma $valor1 + $valor2 é <strong>$soma</strong></p>";  
            ?>
        </div>
    </section>
</body>

</html>