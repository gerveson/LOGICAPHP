<?php

$semana = readline("Digite um dia da semana:");

$resultado2;
if($semana == 'Segunda' || $semana == 'Terça' || $semana == 'Quarta' || $semana == 'Quinta'){
    $resultado2 = 'Dia Util';
}
echo $resultado2;

?>