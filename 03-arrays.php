<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>
</head>
<body>
    <h1>Trabalhando com arrays(vetores e matrizes) no php</h1>
    <hr>
    
    <h2>Arrays com indices numericos</h2>
    <?php
    //sintaxe com colchetes
    $bandas = ["savatage", "iron maiden", "nightwish"];

    // sintaxe com função array()
    $cursos = array("HTML5", "CSS3", "nodejs", "photoshop");

    //sintaxe indicando indice manualmente
    $comidaDeButeco[0] = "Bolinho de bacalhau";
    $comidaDeButeco[1] = "Pastel";
    $comidaDeButeco[2] = "Esfiha de carne";

    // constantes de arrays 
    define("UNIDADES_SENAC", ["Penha", "Tatuape", "itaquera"]);
    const FRUTAS = ["morango", "abacaxi"];
    ?>
    
    <h3>Acessando dados</h3>

    <ol>
        <li>
            Uma das bandas que mais gosto:
            <?=$bandas[2]?>
        </li>
        <li>
            Linguagem base da web:
            <?=$cursos [0]?>
        </li>
        <li>
            Quero comer: 
            <?=$comidaDeButeco[1]?>
        </li>
        <li>
            Senac <?=UNIDADES_SENAC[2]?>
        </li>
        <li>
            Fruta: <?=FRUTAS[0]?>
        </li>
    </ol>

    <h2>Array associativos</h2>

    <?php 
    $curso = [
        "nome" => "Gastronomia", // toda vez que voce se referir ao nome do curso, a palavra gastronomia sera exibida
        "carga_horaria" => 150,
        "unidade" => "penha"
    ];
    ?>

    <p>Nome do curso: <?=$curso["nome"]?></p>
    <p>Carga horaria: <?=$curso["carga_horaria"]?> Horas</p>
    <p>Unidade: SENAC <?=$curso["unidade"]?></p>

    <h2>Matriz (Array dentro de array)</h2>

    <?php 
        // plano de estudos de Front, Back e Design

        // Isto e uma matriz de 2 dimensões, tem um "arrayzão" e dentro dele tem "Arrayzinhos"
        $plano_estudos = [
            // 0                      // 1      // 2
            ["JavaScript avançado", "node.js", "react"], // 0

            // 0    // 1    // 2     // 3
            ["PHP", "POO", "MySQL", "Python"], // 1

            // 0                  // 1          // 2
            ["Teoria das cores", "Photoshop", "UX/UI"] // 2
        ];
    ?>

    <!-- Mini exercicio
        Crie uma lista não ordenada e mostre nela os seguintes itens:
        React, PHP/MySQL, Photoshop e teoria das cores
-->

        <ul>
            <li>
                <?=$plano_estudos[0][2]?>

            </li>

            <li>
            <?=$plano_estudos[1][0]?>/<?=$plano_estudos[1][2]?>
            </li>

            <li>
            <?=$plano_estudos[2][1]?>
            </li>
            
            <li>
            <?=$plano_estudos[2][0]?>
            </li>
        </ul>

        <h2>Analise de arrays (debug/depuração de codigo)</h2>

        <p><?php var_dump($bandas);?></p>
        <pre><?=var_dump($bandas);?></pre>

        <hr>

        <p><?php print_r($bandas); ?></p>
        <pre><?=print_r($bandas)?></pre>

        <hr>

        <pre>
            <?=var_dump($plano_estudos);?>
        </pre>
</body>
</html>