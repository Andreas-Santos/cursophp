<!-- Anatomia de uma divisão -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Idade</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $nasc = $_GET['nasc'] ?? "";
        $ano = $_GET['ano'] ?? "";
    ?>

    <div class="container">
        <h1>Cálculo de Idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?= date('Y') ?>" required value="<?= $nasc ?>">

            <label for="ano">Quer saber sua idade em que ano?</label>
            <input type="number" name="ano" id="ano" min="<?= $nasc ?>" required value="<?= $ano ?>">

            <input type="submit" value="Calcular">
        </form>

        <br>
        <h1>Resultado</h1>
        <?php 
            $totalAnos = $ano - $nasc;
            echo "Quem nasceu em $nasc vai ter <strong>$totalAnos anos</strong> em $ano!";
        ?>

    </div>

</body>

</html>