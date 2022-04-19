<table>
    <tr>
<th><td>curso:</td>
<td>descrição:</td></th></tr>
<?php
$cursos = [
        [
            "linguagem" => "HTML",
            "descrição" => "estruturação"
        ],
        [
            "linguagem" => "CSS",
            "descrição" => "estilos"
        ],
        [
            "linguagem" => "JavaScript",
            "descrição" => "comportamentos"
        ],
        [
            "linguagem" => "PHP",
            "descrição" => "back-end"
        ]
    ];

    foreach($cursos as $curso) {
    ?>
    <tr><td></td>
    <td></td>
    </tr>
        
        
    <td><th>
    <?=$curso['linguagem']?></th></td>

    <td>
    <?=$curso['descrição']?>
    </td>

    
    <?php
    }
    
    ?>
    </table>