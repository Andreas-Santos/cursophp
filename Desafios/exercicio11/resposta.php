<!-- Anatomia de uma divisão -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Preço</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
        $porcentagem = $_GET['porc'] ?? 0;
    ?>

   <div class="container">
        <h1>Reajustador de Preço</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Preço do produto que deseja reajustar (R$):</label>
            <input type="number" name="valor" id="valor" step="0.01" min="0" required value="<?=$valor?>">

            <label for="porc">Porcentagem que deseja reajustar (<strong><span id="x">?</span>%</strong>):</label><br>
            <input type="range" name="porc" id="porc" min="0" max="100" oninput="mudaValor()" value="<?=$porcentagem?>">

            <input type="submit" value="Calcular Reajuste">
        </form>

        <h1>Resultado do Reajuste</h1>
        <?php 
            $novoValor = $valor + ($valor * $porcentagem / 100);

            echo "O produto que custava R$" . number_format($valor, 2, ",", ".") . ", com o reajuste de <strong>$porcentagem%</strong>, vai passar a custar <strong>R$" . number_format($novoValor, 2, ",", ".") . "</strong> a partir de agora";
        ?>
   </div>
    <script>
        mudaValor();

        function mudaValor() {
            x.innerText = porc.value;
        }
    </script>

</body>

</html>