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
            $num = $_GET["num"];
            $ant = $num - 1;
            $suc = $num + 1;

            echo "<p>O número escolhido foi <strong>$num</strong></p>
                <p>O seu antecessor é <strong>$ant</strong>
                <p>O seu sucessor é <strong>$suc</strong>"
        ?>

        <br>
        <button onclick="javascript: window.location.href='index.html'">Voltar</button>
    </div>
</body>
</html>