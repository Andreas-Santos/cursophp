<!-- Anatomia de uma divisão -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        $numero = $_GET['num'] ?? 0;
    ?>

    <div class="container">
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Número:</label>
            <input type="number" name="num" id="num" value="<?= $numero ?>">

            <input type="submit" value="Calcular Raízes">
        </form>

        <h1>Resultado</h1>
        <?php 
            $raizQuadrada = sqrt($numero);
            $raizCubica = $numero ** (1/3);

            echo "<p>Analisando o número $numero, temos:";
            
            echo 
                "<ul>
                    <li>Raiz quadrada: $raizQuadrada</li>
                    <li>Raiz cúbica: $raizCubica</li>
                </ul>"
        ?>
    </div>

</body>

</html>