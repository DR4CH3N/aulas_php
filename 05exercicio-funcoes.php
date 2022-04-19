<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio - funções</title>
    <style>
        .aprovado { color: green; }
        .reprovado { color: red; }
    </style>
</head>
<body>

    <?php 
    function calculaMedia ($nota1, $nota2) {
        $media = ($nota1 + $nota2) / 2;
    
    return $media;
    }

    function verificaSituacao ( $m ) {
        if ($m >= 7) {
            return "aprovado";
        } else {
            return "reprovado";
        }
    }

    $nota1 = 9;
    $nota2 = 7;
    $media = calculaMedia($nota1, $nota2);
    ?>

    <p><?=$media?></p>
    <p class=><?=verificaSituacao($media)?></p>

   
</body>
</html>