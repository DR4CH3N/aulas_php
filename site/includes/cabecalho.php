<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?> - Site PHP</title>
    <link rel="stylesheet" href="includes/CSS/style.css">

    <!-- faz o header mudar quando voce troca de pagina (pode ser titulo, cor, etc) -->
    <?php 
    $pagina = basename($_SERVER["PHP_SELF"]);
    switch ($pagina) {
        case 'index.php': $titulo = "Página inicial"; break;
        case 'produtos.php': $titulo = "produtos"; break;
        case 'servicos.php': $titulo = "serviços"; break;
        default: $titulo = "contato"; break;
    }
    ?>

</head>
<body>
    <header>
        <h1><?=$titulo?> Site PHP</h1>

    <nav>
        <a href="index.php">Home</a>
        <a href="produtos.php">Produtos</a>
        <a href="servicos.php">Serviços</a> 
        <a href="contato.php">Contato</a>
    </nav>
    </header>

    <main>