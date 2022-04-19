<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicionais</title>
</head>
<body>
    <h1>Estruturas de controle condicional</h1>
    <hr>

    <h2>simples</h2>

    <?php
    $numero = 5;
    if ($numero > 1) {
        echo "<p>$numero é maior que 1</p>";
    }

    else 
    echo "<p>$numero é menor/igual que 1</p>"
    ?>

    <h2>composta</h2>
    <style>
        .ok { color: green; }
        .repor { color: red; }
    </style>

    <?php
    $produto = "MacBook";
    $qtdEmEstoque = 0; // o que temos no momento
    $qtdCritica = 14; // minimo necessario
    echo "<h3>$produto</h3>";

    if ($qtdEmEstoque < $qtdCritica) {
        echo "<p class='repor'>É necessario comprar!</p>";

    }

    // condicional aninhada
    if ($qtdEmEstoque === 0) {
        echo "<p><mark><b>URGENTE!!!</b></mark></p>";
    }
    else {
        echo "<p class='ok'> Estoque OK</p>";
    }

    // == significa igualdade
    // === significa identico
    // igualdade e menos restritiva e identico e mais restritiva 
    ?>

    

    <h2>encadeada</h2>

    <?php
    // cardapio digital:
    // 1 -> Pastel
    // 2 -> pizza
    // 3 -> esfiha
    // x -> opção invalida, escolha alguma outra coisa

    $opcao = 2; // comece com qualquer valor
    
    if ($opcao === 1) {
        $opcaoescolhida = "Pastel";
    }
    elseif ($opcao === 2) {
        $opcaoescolhida = "Pizza";
    }
    elseif ($opcao === 3) {
        $opcaoescolhida = "Esfiha";
    }
    else {
        $opcaoescolhida = "Opção invalida, escolha outra coisa";
    }
    echo "<p>$opcaoescolhida</p>";

    ?>

    <h2>Switch/case</h2>

    <?php
    switch ($opcao) {
        case 1: $pedido = "Pastel";
        break;

        case 2: $pedido = "Pizza";
        break;

        case 3: $pedido = "Esfiha";
        break;

        default: $pedido = "Opção invalida, peça outra coisa";
        break;
    }

    echo "<p>$pedido</p>";

    ?>
    
</body>
</html>