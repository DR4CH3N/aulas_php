<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2 aray duplo</title>
    <link rel="stylesheet" href="02exercicio-array-duplo-estilo.css">
</head>
<body>
    <?php 
    $jessica = 
        ["Jessica" ,"mulher", 26, "contatojessica@outlook.com"];
    ?>

    <?php 
    $roberto = 
    ["roberto", "homem", 32, "contatoroberto@gmail.com"];
    ?>

    <h1>Dados dos Usuarios:</h1>
    <!-- Saida do 1 usuario -->
    <section class="dados_1">
    <p>Nome: <?=$roberto[0]?></p>
    <p>Sexo: <?=$roberto[1]?></p>
    <p>idade: <?=$roberto[2]?> </p>
    <p>E-mail: <?=$roberto[3]?> </p>
    </section>
    
    <hr>
    <!-- saida do 2 usuario -->
    <section class="dados_2">
    <p>Nome: <?=$jessica[0]?> </p>
    <p>Sexo: <?=$jessica[1]?> </p>
    <p>Idade: <?=$jessica[2]?> </p>
    <p>E-mail: <?=$jessica[3]?> </p>       
    </section>
</body>
</html>