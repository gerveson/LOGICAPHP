<?php

$alunos = [
    [
        "nome" => "Diego Bracellos",
        "turma" => "PHP 1",
        "periodo" => "Noturno",
        "modo" => "Online",
        "notas" => [10, 7.5, 8]
         
    ],
    [
        "nome" => "Sergio Arrazão",
        "turma" => "PHP 2",
        "periodo" => "Vespertino",
        "modo" => "Online",
        "notas" => [8, 9, 5]
    ],

];
//$i é o incrementador
// count() conta a quantidade de registros no array
for($i = 0; $i < count($alunos); $i++){
    //bloco do for
    $totalNotas = count($alunos[$i]["notas"]);
    $media = 0;
    $somaNotas = 0;
    for ($a = 0; $a < count($alunos[$i]["notas"]); $a++){
        $somaNotas = $somaNotas + $alunos[$i]["notas"][$a];
    }
    $media = $somaNotas / $totalNotas;
    echo "Aluno: {$alunos [$i]['nome']} | Turma: {$alunos[$i]['turma']} | Periodo {$alunos[$i]['periodo']} | Modo {alunos[$i]['modo']}";

}

?>


