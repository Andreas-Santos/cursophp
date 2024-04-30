<!-- Criar conversor de moeda usando API do banco central -->

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
        <h1>Analisador de Número Real</h1>
        <?php 
           $num = $_GET["num"];

           $inteira = (int) $num;
           $fracionaria = $num - $inteira;

           echo "Analisando o número <strong>$num</strong> informado pelo usuário:";

           echo "<ul>
                    <li>A parte inteira do número é: <strong>" . number_format($inteira, 0, ",", ".") . "</strong>
                    <li>A parte fracionária do número é: <strong>" . number_format($fracionaria, 3, ",", ".") . "</strong>
                </ul>";
        ?>
        <button onclick="javascript: window.location.href='index.html'">Voltar</button>
    </div>
</body>
</html>