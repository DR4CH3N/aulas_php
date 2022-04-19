<?php 
include "recursos.php"; /* precisa tambem especificar o caminho da pasta onde esta o codigo que vai ser executado no include */
?>
<!-- caso usar o comando include, SEMPRE coloque primeiro antes do DOCTYPE -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include e require</title>
</head>
<body>
<h1>Inclusão de recursos</h1>
<hr>

<!-- fazendo a inclusão de um arquivo de programação -->

<!-- voce tambem pode usar require em vez de include, se usar include ele apenas inclui um codigo, caso for require ele vai requirir. na duvida usa require para que o codigo não dê pau e não dê erro. -->

<h2><?=escola?></h2>
<p>estamos fazendo o curso de <?=$curso?></p>
<ul>
    <?php foreach ($tecnologias as $tecnologia) { ?>
        <li> <?=$tecnologia?> </li>
        <?php } ?>
</ul>


    
<p>O aluno chapolin colorado tem 25 anos e é: <?=verificaIdade(25)?> de idade. </p>


<hr>

<article>
    <h2>Conteudo qualquer</h2>
    <?php include "textos.php" ?>


    
</article>

</body>
</html>