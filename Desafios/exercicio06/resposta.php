<!-- Anatomia de uma divisão -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
    ?>

    <div class="container">
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?=$dividendo?>">

            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?=$divisor?>">

            <input type="submit" value="Dividir">
        </form>

        <br>

        <h1>Resultado</h1>
        <?php 
            $divInteiro = intdiv($dividendo, $divisor);
            
            $resto = $dividendo % $divisor;

            echo "<p>O dividendo é: $dividendo</p>";
            echo "<p>O divisor é: $divisor</p>";
            echo "<p>O resultado inteiro da divisão é: $divInteiro</p>";
            echo "<p>O resto da divisão é: $resto";
        ?>
    </div>
</body>

</html>