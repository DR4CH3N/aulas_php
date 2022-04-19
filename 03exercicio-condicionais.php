<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio salarios</title>
</head>
<body>
    <h1>Exercicio de calculo de salarios</h1>
    <hr>
    
    <?php 
    $salario = 1700;
    $reajuste5 = 1.05;
    $reajuste10 = 1.10;
    $reajuste15 = 1.15;

    if ($salario < 500) {
        $novosalario = $salario * $reajuste15;
    }
    elseif ($salario <= 1000) {
        $novosalario = $salario * $reajuste10;
    }
    else {
         $novosalario = $salario * $reajuste5;
    }
    ?>
    <p><?=number_format($salario)?> Salario antigo</p>
    <p><?=number_format($novosalario)?> Salario reajustado</p>
    

</body>
</html>