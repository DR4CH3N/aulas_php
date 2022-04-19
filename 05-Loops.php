<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops no PHP</title>
</head>
<body>

    <h1>Estruturas de controle de repetição</h1>
    <hr>
    <h2>while(enquanto)</h2>
    <?php 
    $i = 1;
    
    while($i <= 5) {
        echo "<p>$i</p>";
        $i++; // usando incremento 

    }
    ?>
    
    <?php 
    $ii = 1;
    
    while($ii <= 5) {
    ?>
        
        <p><?=$ii?></p>

     <?php
        $ii++; 

    }
    ?>
    <hr>
    <h2>do/while (repita)</h2>

    <?php
    $j = 1; // declaração de variaveis
    do {    // inicio do comando
        ?>

        <!-- comandos a serem repetidos -->
        <div><h3>Olá!</h3></div> 
        <?php

        $j++;   // atualização do contador
    } while ($j <= 3); 
    ?>
    <hr>
    <h2>Loop for (para)</h2>

    <?php
    // para i de 1 até 10 faça

   // controle; condição; atualização;
    for ($i = 1; $i <= 10; $i++) {
        echo $i. " ";


    }
    ?>

<ol>

    <?php
    $meses[0] = "Janeiro";
    $meses[1] = "fevereiro";
    $meses[2] = "março";
    $meses[3] = "abril";
    $meses[4] = "maio";
    $meses[5] = "junho";
    $meses[6] = "julho";
    $meses[7] = "agosto";
    $meses[8] = "setembro";
    $meses[9] = "outubro";
    $meses[10] = "novembro";
    $meses[11] = "dezembro";

    $quantidade = count($meses);
    for ($i = 0; $i < $quantidade; $i++) {
    ?>

      
        <li>
        <?=$meses[$i]?>
        </li>
      
      <?php
      
    }
    ?>
    </ol>

    <h2>foreach (para cada...)</h2>

    <ol>
        <?php foreach ($meses as $mes) { ?>
        <li><?=$mes?></li>

    <?php
    }
    ?>
    </ol>

    <?php 
    // array associativo
    $clubes = [
        "corinthians" => "timão",
        "palmeiras" => "porco",
        "são paulo" => "tricolor",
        "santos" => "peixe"
    ];
    
    // foreach ($clubes as $clube) {
        foreach ($clubes as $clube => $apelido) {
        ?>

    <p>O <?=$clube?> é conhecido como: <?=$apelido?></p>

    <?php
    }
    // matriz (array dentro de array)
    $alunos = [
        [
            "nome" => "chaves",
            "idade" => 8
        ],
        [
            "nome" => "chapolin",
            "idade" => 20
        ],
        [
            "nome" => "chiquinha",
            "idade" => 10
        ]
    ];

    foreach($alunos as $aluno) {
    ?>
    <p>nome: <?=$aluno['nome']?></p>
    <p>idade: <?=$aluno['idade']?></p>
    <hr>

    <?php
    }
    ?>
    
</body>
</html>