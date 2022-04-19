<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario e processamento</title>
</head>
<body>
    <h1>formulario e processamento</h1>
    <hr>

    <?php 
    // detectar quando o formulario é acionado
    if (isset($_POST['enviar'] ) ) {

        /* validando se os campos foram preenchidos e acessando arrays */

        if(empty($_POST['nome']) || empty($_POST['email'])) {
            ?>

            <p>preencha os campos!</p>

            <p><a href="http://localhost/aulas_php/10-formulario-processamento.php">Voltar</a></p>

            <?php
        } else {
        
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        ?>

        <section>
            <h2>Dados</h2>
            <p>Nome: <?=$nome?></p>
            <p>E-mail: <?=$email?></p>

            <p><a href="http://localhost/aulas_php/10-formulario-processamento.php">Voltar</a></p>
        </section>

        <?php
        }
    } else {
        ?>
       <!-- deixar o action vazio!! -->
    <form action="" method="post">
    <p>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
    </p>
    <p>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </p>
    
    <!-- importante dar um name ao botão -->
    <button type="submit" name="enviar">Enviar</button>
    </form>
        <?php
        }
    ?>
</body>
</html>