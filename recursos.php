<?php 
define ("escola", "senac");
$curso = "técnico em informatica para internet";
$tecnologias = ["HTML", "CSS", "JS", "PHP"];

function verificaIdade(int $idade): string {
    return $idade >= 18 ? "maior" : "menor";
}
// fechamento e opcional quando é PHP puro (porem é recomendado não fechar)



