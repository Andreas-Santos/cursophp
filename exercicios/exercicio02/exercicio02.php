<!-- Criar gerador de número aleatório -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de números aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100</p>
        <?php 
            $random = rand(0, 100);

            echo "<p>O número gerado foi <strong>$random</strong></p>";
        ?>
        <button onclick="javascript: document.location.reload()">Gerar</button>
    </div>
</body>

</html>