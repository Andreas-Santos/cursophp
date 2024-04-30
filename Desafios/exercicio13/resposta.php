<!-- Anatomia de uma divisão -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;

        $resto = $valor;

        $notas100 = intdiv($resto, 100);
        $resto %= 100;

        $notas50 = intdiv($resto, 50);
        $resto %= 50;

        $notas10 = intdiv($resto, 10);
        $resto %= 10;

        $notas5 = intdiv($resto, 5);
        $resto %= 5;
    ?>
    <div class="container">
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Quanto você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor" step="5" value="<?=$valor?>" required>
            <p><i></i>Notas disponíveis: R$100, R$50, R$ 10, R$5</p>

            <input type="submit" value="Sacar">
        </form>

        <h1>Saque de R$<?=number_format($valor, 2, ",",".")?> realizado</h1>
        <p>O caixa eletrônico irá te entregar o seguinte número de notas:</p>
        <ul>
            <li><strong><?=$notas100?> notas</strong> de 100 reais</li>
            <li><strong><?=$notas50?> notas</strong> de 50 reais</li>
            <li><strong><?=$notas10?> notas</strong> de 10 reais</li>
            <li><strong><?=$notas5?> notas</strong> de 5 reais</li>
        </ul>
    </div>
</body>
</html>