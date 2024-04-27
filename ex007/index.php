<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores e Funções Aritméticas</title>
</head>

<body>
    <!-- 
        + é o operador de soma;
        - é operador de subtracao;
        / é o operador de divisao;
        * é o operador de multiplicacao;
        % é o operador de resto de divisao real;
        ** é operador de potenciacao ;
    -->
    <?php 
        $valor = abs(-2000); //usado para adquirir o valor absoluto (sem o sinal de negativo)
        echo "abs() --> O resultado é $valor<br>";
        $valor = abs(300);
        echo "abs() --> O resultado é $valor<br>";

        //A função base_convert pode ser utilizada para converter números para diferentes bases
        $valor = base_convert(254, 10, 8);//converte o número 254 da base 10 para base 8
        echo "base_convert() --> O resultado é $valor<br>";
        $valor = base_convert(254, 10, 2); //converte de decimal para binário
        echo "base_convert() --> O resultado é $valor<br>";

        //Funções de arredondamento
        //ceil() --> arredonda pra cima
        //floor() --> arredonda para baixo
        //round() --> arredondamento aritmético

        //função para cálculo de hipotenusa
        //hypot()

        //função para divisão inteira, sem número de ponto flutuante
        //intdiv()

        //função para pegar valor mínimo
        //min()

        //funcao para pegar valor máximo
        //max()

        //função para valor de pi
        //pi()

        //função para raíz quadrada
        //sqrt()
    ?>
</body>

</html>