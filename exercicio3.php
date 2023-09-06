<?php

/* 
1. Crie um algoritmo que, dado o nível de alerta de risco, imprima se ele for GRAVE. O
nível de alerta é um número que varia de 0 a 10. 
Observe as regras

até 3 é risco baixo
de 4 até 6 risco moderado
de 7 a 9 risco médio
acima de 9 grave
considere que o intervalo será de 0 a 10
*/

$alerta = readline("Digite o risco:");

$resultado;

if($alerta <= 3){
    $resultado = 'Risco baixo';
}else if($alerta > 3 && $alerta <= 6){
    $resultado = 'Risco moderado';
}else if($alerta > 6 && $alerta <= 9){
    $resultado = 'Risco medio';
}else if($alerta > 9){
    $resultado = 'Risco grave';
}
print_r($resultado);

?>