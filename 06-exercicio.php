<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST EXERCICIO 06</title>
</head>
<body>
    <h1>processamento de dados usando POST EXERCICIO 06</h1>
    <hr>

    <?php 
    if(empty($_POST['nome']) || empty($_POST['preco'])) {
        echo "<p>Voce deve preencher o nome do produto e o preço!!</p>";
    } else {
    // capturando os dados transmitidos e limpando/sanitizando eles

    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
    $marcas = filter_input(INPUT_POST, 'marcas', FILTER_SANITIZE_SPECIAL_CHARS);

    /* usando o operador de coalescencia nula/null coalescing ?? se houver interesses, armazene seus valores. senão, deixe o array vazio. 
    $interesses = $_POST['interesses'] ?? [];
    $marcas = filter_var_array(
        $_POST['marcas'] ?? [],
        FILTER_SANITIZE_SPECIAL_CHARS
    ); */

    ?>

   <h2>dados</h2>

   <!-- SAIDA DE DADOS -->
    <ul>
        <li>Nome do produto:<?=$nome?></li>

        <!-- Number format no preço não deu certo, porem com um script de javascript deu (um pequeno spoiler de uma futura aula) -->
        
        <!-- <li>Preço: R$ <//?= number_format($preco, 2,",", ".")?> </li> -->

        <li>Preço: R$ <span><?=number_format($preco, 2,",", ".")?></span> </li>
        <li>Marca:<?=$marcas?></li>

        <!-- se interesses NÃO estiver vazio, ele vai fazer tudo isso, caso estiver vazio ele não vai fazer nada (! antes de um operador vai fazer ele ser negativo/não/função reversa) -->

        <?php if( !empty($interesses)) { ?>
        <!-- opção 1: implodindo o array, transformando em string -->
        <li>Descrição: <?=implode(", ", $descricao);?></li>

        <li> Descrição:
            <ul>
                <!-- opção 2: acessar o array usando loop -->
                <?php foreach ($marcas as $marca){  ?>
                    <li><?=$marca?></li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>

        <!-- NL2BR (tudo em minusculo em vez de maiusculo) faz com que o texto que voce digitou tenha quebras de linha (porem caso estiver usando FILTER_SANITIZE_SPECIAL_CHARS e digitar o NL2BR o filtro irá barrar este comando ja que ele é HTML) -->

        <!-- NL2BR -> New line to break (cria <br>) -->
        <li>Descrição do produto:<?=nl2br($descricao)?></li>
    </ul>
    <!-- fim if/else da validação de campos obrigatorios -->
    <?php } ?> 

    <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="jquery.mask.min.js"></script>
    <script>
        $('span').mask('000.000.000.000.000,00', {reverse: true});
    </script> -->
</body>
</html>