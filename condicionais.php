<?php   
//if
/*
//sintaxe
if(condicao){
    verdadeiro
} else{
    false
}
?>
*/

$valor = readline("Digite sua idade: ");

$resultado;
if($valor <= 12){
    $resultado = 'Você ainda é uma criança';
}else if($valor > 12 && $valor <=18){
    $resultado = 'Você ja é um joven, vai trabalhar';
}else if($valor > 18 && $valor <= 40){
    $resultado = 'Você é um adulto';
}else{
    $resultado = 'bichão';
}
?>



