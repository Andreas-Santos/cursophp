<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
        // var_dump($_GET);
        // var_dump($_POST);
        // var_dump($_REQUEST); //uma junção da $_GET, $_POST E $_COOKIES

        $nome = $_GET["nome"] ?? "sem nome"; //cria a variável recebendo o valor do input
        $email = $_GET["email"] ?? "desconhecido";
        $telefone = $_GET["tel"] ?? "desconhecido";

        //usando o operador de coalescência nula para definir o conteúdo da váriavel
        //isso significa que, caso o input esteja vazio (null), a váriavel será preenchida
        //com o conteúdo ao lado direito do operador de coalescência nula (??)

        echo "<h3>Nome: $nome<br>
                Email: $email<br>
                Tefefone: $telefone<h3>";
        ?>

        <a href="javascript:history.go(-1)">Voltar para o formulário</a>
    </main>
</body>

</html>