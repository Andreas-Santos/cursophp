<!-- Anatomia de uma divisão -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $totalSegundos = $_GET['totalSegundos'] ?? 0;
    ?>

    <div class="container">
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="totalSegundos">Qual é o total de segundos?</label>
            <input type="number" name="totalSegundos" id="totalSegundos" requied value="<?=$totalSegundos?>">
            
            <input type="submit" value="Calcular">
        </form>

        <h1>Total de Tempo</h1>
        <?php 
            $segundosRestantes = $totalSegundos;
            
            //armazena quantas semanas e subtrai os segundos das semanas do valor total de segundos
            $semanas = intdiv($segundosRestantes, 604800);
            $segundosRestantes %= 604800;

            //repete o processo para dias
            $dias = intdiv($segundosRestantes, 86400);
            $segundosRestantes %= 86400;

            //repete o processo para horas
            $horas = intdiv($segundosRestantes, 3600);
            $segundosRestantes %= 3600;

            //repete o processo para minutos
            $minutos = intdiv($segundosRestantes, 60);
            $segundosRestantes %= 60;

            echo 
                "<p>Analisando o valor digitado, <strong>" . number_format($totalSegundos, 0, ",", ".") . "</strong>    equivale a um total de:
                <ul>
                    <li>$semanas Semanas</li>
                    <li>$dias Dias</li>
                    <li>$horas Horas</li>
                    <li>$minutos Minutos</li>
                    <li>$segundosRestantes Segundos</li>
                </ul>"
        ?>
    </div>
</body>
</html>