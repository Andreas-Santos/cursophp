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
        <h1>Resultado Final</h1>
        <?php 
            $dataInicio = date("m-d-Y", strtotime("-7 days")); //pega data de inicio 7 dias pra trás
            $dataFim = date("m-d-Y"); //pega data fim, que é o dia atual
            
            //pega a url da API usando as váriaveis para filtrar a última semana
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $dataInicio . '\'&@dataFinalCotacao=\'' . $dataFim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            //Decodifica o arquivo json para que possa ser lido
            $getDados = json_decode(file_get_contents($url), true);

            //pega dentro do arquivo decodificado o primeiro item do array retornado
            $cotacao = $getDados["value"][0]["cotacaoCompra"];

            //pega o valor em reais digitado pelo usuário
            $reais = $_GET["valor"];

            //converte o valor digitado para dólar
            $dolares = $reais / $cotacao;

            //cria padrão para mostrar o valor formatado na tela
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            //exibe na tela o valor convertido já formatado
            echo numfmt_format_currency($padrao, $reais, "BRL") . " é equivalente a " . 
                numfmt_format_currency($padrao, $dolares, "USD");
            
            echo "<br><br><i>Cotação do dólar retirada diretamente do site do <strong>Banco Central</strong></i>";
        
        ?>

        <br>
        <button onclick="javascript: window.location.href='index.html'">Voltar</button>
    </div>
</body>
</html>