<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando PHP</title>
</head>
<body>
    <h1>Realizando alguns testes em PHP</h1>
    <?php
        date_default_timezone_set('America/Sao_Paulo');
        echo "Hoje é dia " . date("d/m/Y");
        echo " e são " . date("G:i:s") . "<br>Timezone: " . date_default_timezone_get(); 

        //a função date() pode ser utilizada para expressar datas e horários em diferentes zonas temporais
    ?>
</body>
</html>