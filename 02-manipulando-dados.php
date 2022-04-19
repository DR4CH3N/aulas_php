<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando dados com PHP</title>
    <style>

    <?php $cor= "purple"; ?>

    p { color: <?=$cor ?> }

    </style>
</head>
<body>
    <?php
    //variaveis
    $curso = "tecnico em informatica para internet"; //string
    $ano = 2022; // inteiro (integer)
    $preco = 2500.45; // real (float)


    echo "<h2>Saidas de dados</h2>";
    echo "<p>$curso</p>"; // aspa dupla permite interpolação (variavel e texto)
    echo '<p>$ano</p>'; // aspa simples encara tudo como preço 
    echo "<p>$preco</p>";
    
    // estamos fazendo o curso tecnico em informatica para internet no ano de 2022
    echo "<p>Estamos fazendo o curso $curso no ano de $ano</p>"; 
    ?>

    <h2>Saida de dados usando sintaxe simplificada:</h2>
    <p> <?php echo $curso; ?> </p>
    <p> <?=$curso;?> </p> 

    <p>Estamos fazendo o curso <?= $curso; ?> no ano de <?= $ano; ?></p>

    <hr>

    <?php
    // contantes

    // 1ª forma: usando a função define("NOME", "VALOR")
    define("MEU_NOME", "Matheus");

    // 2ª forma usando a palavra chave const
    const ESCOLA = "Senac";
    ?>

    <p>olá! Me chamo <?=MEU_NOME ?></p>

    <p>Estamos estudando no <b><?=ESCOLA?></b></p>

    <?php // versão concatenada
    echo "<p>olá! eu me chamo ".MEU_NOME." e tenho 19 anos</p>";
    echo "<p>Estamos estudando no <b>".ESCOLA."</b> </p>"; 
    
    ?>
</body>
</html>