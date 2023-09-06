<?php

/*
2. construa um algoritmo que receba 4 notas de uma aluno, calcule a média e retorne a média final informando se o aluno está aprovado ou reprovado.
para aprovação a média deve ser igual ou maior a 7
*/

$nota1 = $_POST("nota1");
$nota2 = $_POST("nota2");
$nota3 = $_POST("nota3");
$nota4 = $_POST("nota4");


$resultado;
$media = ($nota1+$nota2+$nota3 + $nota4) / 4;
if($media >= 7){
    $resultado = "Aprovado";
}else if($media < 7){
    $resultado = "Reprovado";
}

?>