<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP 01</title>
</head>
<body>
    <?php
    //constantes
    date_default_timezone_set("america/sao_paulo");
    $data = date ("d/m/y h:i"); // função date
    const nome = "roger";
    const curso = "modelagem 3D";
    const carga_horaria = 500;
    const limite_faltas = carga_horaria*0.25;
    


    ?>

    <p>Hoje é dia <?=$data?></p>
    <p>Seu nome é <?=nome?></p>
    <p>Voce faz o curso de <?=curso?></p>
    <p>Na qual tem uma carga horaria de <?=carga_horaria?> horas</p>
    <p>E pode faltar no maximo <?=limite_faltas?> horas antes de ser reprovado</p>

    
</body>
</html>