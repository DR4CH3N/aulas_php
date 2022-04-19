<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas</title>
</head>
<body>
    <h1>Exemplos de funções nativas</h1>
    <hr>
    
    <h2>strings</h2>

    <?php 
    // trim(param) -> remove espaços antes e depois de strings

    $nome = "Matheus .ASP    ";
    $nomeSemEspaco = trim($nome);
    ?>
    <pre><?=var_dump($nome)?></pre>
    <pre><?=var_dump($nomeSemEspaco)?></pre>

    <h3>str_replace()</h3>

    
    <?php
    // string replace serve para substituir palavras digitadas por 
    // outras palavras especificadas no codigo 
    $fraseFeia = "<p>Fulano é um bobão e xarope</p>";
    $fraseBonita = str_replace(
        ["bobão", "xarope"],
        ["cara legal", "genial"],
    $fraseFeia
);

echo $fraseFeia;
echo $fraseBonita;


    ?>

    <h3>Explode()</h3>

    <?php 
    $linguagens = "HTML - CSS - JS";
    $arrayLinguagens = explode(" - ", $linguagens);

    /* explode serve para transformar uma string em array usando um separador */
    ?>
    
    <pre><?=var_dump($linguagens)?></pre>
    <pre><?=var_dump($arrayLinguagens)?></pre>

    <h2>arrays</h2>

    <h3>implode</h3>

    <?php 
    // implode faz o contrario de explode, ela trasforma arrays em strings
    $bandas = ["savatage", "nightwish", "ghost"];
    $stringBandas = implode(" / ", $bandas);
    ?>

    <pre><?=var_dump($bandas)?></pre>
    <pre><?=var_dump($stringBandas)?></pre>

    <h3>extract()</h3>

    <?php 
    // extract serve para transformar uma chave em variavel
    $aluno = [
        "nome" => "fulano",
        "idade" => 25,
        "sexo" => "masculino",
        "cidade" => "são paulo"
    ];
    extract($aluno);
    ?>


    <p><?=$nome?></p>
    <p><?=$idade?></p>
    <p><?=$sexo?></p>
    <p><?=$cidade?></p>


    <h2>filtros</h2>

    <?php 
    $email = "thiago.com.br";
    $ataque = "<script>document.body.innerHTML = 'Sou ráqui!!! mwahahahah >.<'</script>";
    $ataqueAnulado = filter_var($ataque, FILTER_SANITIZE_SPECIAL_CHARS);

    echo $ataqueAnulado;
    ?>
    

<p>
    <?=var_dump( filter_var($email, FILTER_VALIDATE_EMAIL) )?>
</p>



    <h2>segurança (criptografia)</h2>
    <?php 
    $senha = "123abc"; // texto puro/plain text (sem segurança)

    // algoritmos mais comuns
    // MD5, SHA1, SHA256

    // ira transformar o valor da variavel senha para criptografar em MD5
    $senhaMD5 = md5($senha);
    
    // ira transformar o valor da variavel senha para criptografar em SHA1
    $senhaSHA1 = sha1($senhaSHA1);
    // ira transformar o valor da variavel senha para criptografar em SHA256 (escreva hash em vez de SHA256)
    $senhaSHA256 = hash('sha256', $senha);

    //  metodo recomendado atualmente para senhas (faz criptografia dinamica)
    $senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
    ?>

    <?php 
    // metodo para verificação de senhas (SEMPRE COLOCAR ESTA MESMA ESTRUTURA DE CODIGO QUANDO FOR USAR HASH) hash 

    $senhadigitada = "123abc";
    // if ($senhadigitada === $senhaSegura) { } NÃO DA CERTO DESTA MANEIRA!!!
    if (password_verify($senhadigitada, $senhaSegura) ) {
        echo "beleza, senhas iguais...";
    } else {
        echo "opa, seha errada!";
    }
    ?>

    <p>senha (texto puro): <?=$senha?></p>
    <p>senha (MD5): <?=$senhaMD5?></p>
    <p>senha (SHA1): <?=$senhaSHA1?></p>
    <p>senha (SHA256): <?=$senhaSHA256?></p>
    <p>senha (usando password_hash): <?=$senhaSegura?></p>
</body>
</html>