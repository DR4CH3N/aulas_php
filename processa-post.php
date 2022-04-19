<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1>processamento de dados usando POST</h1>
    <hr>

    <?php 
    if(empty($_POST['nome']) || empty($_POST['email'])) {
        echo "<p>Voce deve preencher o nome e e-mail!</p>";
    } else {
    // capturando os dados transmitidos e limpando/sanitizando eles

    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);

    /* usando o operador de coalescencia nula/null coalescing ?? se houver interesses, armazene seus valores. senão, deixe o array vazio. 
    $interesses = $_POST['interesses'] ?? []; */
    $interesses = filter_var_array(
        $_POST['interesses'] ?? [],
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    $informativos = filter_input(INPUT_POST, "informativos", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>

   <h2>dados</h2>

    <ul>
        <li>Nome:<?=$nome?></li>
        <li>Idade:<?=$idade?> Anos</li>
        <li>E-mail:<?=$email?></li>

        <!-- se interesses NÃO estiver vazio, ele vai fazer tudo isso, caso estiver vazio ele não vai fazer nada (! antes de um operador vai fazer ele ser negativo/não/função reversa) -->

        <?php if( !empty($interesses)) { ?>
        <!-- opção 1: implodindo o array, transformando em string -->
        <li>interesses: <?=implode(", ", $interesses)?></li>

        <li> interesses:
            <ul>
                <!-- opção 2: acessar o array usando loop -->
                <?php foreach ($interesses as $interesse){  ?>
                    <li><?=$interesse?></li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>

        <li>Mensagem:<?=$mensagem?></li>
    </ul>
    <!-- fim if/else da validação de campos obrigatorios -->
    <?php } ?> 
</body>
</html>