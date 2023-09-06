<?php

//sintaxe

/*

if(condicao){
    true
} else{
    false
}

$valor = '1';
if($valor === 1){
    echo "o valor e igual";
} else{
        echo "o valor e diferente";
}*/

/*
$dia = 7;

if($dia == 0 || $dia == 6){
    echo "final de semana";
}else if($dia > 0 && $dia < 6){
    echo "dia util";
}else if($dia == 5){
    echo "Sextou. Bora tomar uma";
}else{
    echo "Dia Invalido";
}


$idade = readline("Digite sua idade: ");

if(!is_numeric($idade)){
    echo "Valor digitado nao e um numero";
} else if($idade <= 12){
    echo "Voce e uma crianca";
} else if($idade > 12 && $idade <= 18){
    echo "Voce e um jovem, ja pode trabalhar";
} else if($idade > 18 && $idade <= 40){
    echo "Voce esta na meia idade";
} else if($idade > 40 && $idade <= 60){
    echo "Minha Idade";
}


echo "voce e ".($idade >= 18 ? "maior" : "menor"). " de idade";
*/

$dia = 5;
switch ($dia) {
    case 0:
    case 6:
       echo "final de semana";
        break;
    case 5:
    echo "Sextou";
        break;
    default:
       echo "Dia util";
        break;
}

?>