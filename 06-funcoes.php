<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes no PHP</title>
</head>
<body>
    <h1>criando e usando funções</h1>
    <hr>
    
    <h2>Funções como sub-rotina ou procedimento</h2>
    <?php
    function dadosAutor() {
        echo "<div></div>";
        echo "<p>Matheus. ASP</p>";
        echo "<div></div>";
    } 
    ?>

    <section>
        <h3>Chamada de sub-rotina</h3>
        <?=dadosAutor()?>

        <article>
            <h4>Outra chamada</h4>
            <?=dadosAutor()?>
        </article>
    </section>

    <hr>

    <h2>Função com retorno de dados</h2>
    <?php
    function dadosCurso() {
        return "Téc. em informatica para internet";
    }
    ?>

    <p>Estamos no curso de <?=dadosCurso()?></p>
    <p><?=dadosCurso()?> é ministrado no senac penha</p>


    <h2>Função com parametros (ou argumentos)</h2>

    <?php
    function soma ($valor1, $valor2, $valor3 = 0) {
        //variavel LOCAL!!
        $total = $valor1 + $valor2 + $valor3;
        // ao dar return, uma variavel local pode ser usada externamente 
        return $total;
    }
    ?>

<!-- o terceiro parametro quando não informado assumira o valor 
padrão (no caso, 0 zero) -->
    <p><?=soma(10, 20, 30)?> </p>
    <p><?=soma(100, 200, 300)?> </p>
    <p><?=soma(1, 2, 3)?> </p>

    <!-- VARIAVEL ABAIXO É DE ESCOPO GLOBAL -->
    <?php 
    $resultado = soma(1500, 2000, 125);
    ?>
    <p><?=$resultado?></p>

    <?php 
    if( soma(500, 200, 700) > 1000 ) {
        echo "resultado da função é maior/igual a 1000";
    }

    function verificaNegativo($valor) {
        // VERSÃO 1
    //    if ($valor < 0) {
      //      return "negativo";
       // } else {
        //    return "não e negativo";
      //  }

         // VERSÃO 2: if/else usando operador ternario
         return $valor < 0 ? "negativo" : "não é negativo";

    }
    ?>
    <p><?=verificaNegativo(10)?></p>
    <p><?=verificaNegativo(-150)?></p>
    <p><?=verificaNegativo(258.99)?></p>

    <h2>função anônima (closure, lambda)</h2>

    <?php 
    $formataPreco = function($valor) {
return "R$ ".number_format($valor, 2, ",", ".");
    };
    ?>
    
    <p><?=$formataPreco(1000)?></p>
    <p><?=$formataPreco(1500)?></p>
    <p><?=$formataPreco(1500.75)?></p>

    <h2>Indução de tipos</h2>

    <?php 
    // tipos de dados do PHP
    // float: valores numericos podendo ter casa decimal
    // int: valor numericos inteiros
    // string: caracteres

    /* 
    caso tiver 2 pontos no final de parenteses, ele vai retornar os tipos de dados em X tipo EX:
    
    caso tiver float ele vai devolver no tipo float (numero com casa decimal)
    caso string ele vai devolver como texto
    caso int ele vai devolver como valor numerico inteiro (sem virgulas)
    
    */

    function calculaMedia (float $nota1, float $nota2): float {
        $media = ($nota1 + $nota2) / 2;
    
    return $media;
    }
    ?>

    <p><?=calculaMedia('Matheus', 7)?> </p>


</body>
</html>