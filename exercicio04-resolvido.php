<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 4 resolvido</title>
    <style>
        tr:nth-child(even) {background: yellow; }
    </style>
</head>
<body>
    
    <?php
    $linguagens = [
        "html" => "estruturação",
        "CSS" => "estilos",
        "JS" => "Comportamentos",
        "PHP" => "Back-end"
    ];

    ?> 
<table>

    <thead>
        <tr>
            <th>ID</th>
            <th>Linguagem</th>
            <th>descricao</th>
        </tr>
    </thead>
    
    <tbody>
        <?php $i = 1;

        foreach ($linguagens as $linguagem => $descricao) { ?>
            <tr>
                <td><?=$i?> </td>
                <td><?=$linguagem?> </td>
                <td><?$descricao?> </td>
            </tr>

            <?php 
                $i++;
        } 
        ?>
    </tbody>

    </table>
    <hr>

    <h2>versão 2: usando matriz (array) </h2>

    <?php
    $linguagens2 = [
        [
        "id" => 1,
        "linguagem" => "HTML",
        "descrição" => "estruturação"
    ],
    [
        "id" => 2,
        "linguagem" => "CSS",
        "descrição" => "estilos"
    ],
    [
        "id" => 3,
        "linguagem" => "JS",
        "descrição" => "comportamentos"
    ],
    [
        "id" => 4,
        "linguagem" => "PHP",
        "descrição" => "Back-end"
    ]
    ];
    ?>

    <table>
        <caption></caption>

        <tr>
            <th>ID</th>
            <th>Linguagem</th>
            <th>Descrição</th>
        </tr>
        <?php foreach ($linguagens2 as $linguagem) { ?>
        <tr>
            <td><?=$linguagem['id']?> </td>
            <td><?=$linguagem['linguagem']?> </td>
            <td><?=$linguagem['descrição']?> </td>
        </tr>
        <?php } ?>
    </table>


</body>
</html>