<?php

// comentário de uma linha ou ctrl + ;

/* comentário de bloco 
ou shift + alt + a 

REGRAS PARA NOMES DE VARIAVEIS
- NOME DA VARIAVEL NÃO PODE COMEÇAR COM NUMEROS
- NÃO PODE TER ESPAÇO NO NOME DA VARIAVEL
- NÃO PODE TER SIMBOLOS DE OPERADORES
- NÃO PODEM USAR PALAVRAS RESERVADAS

BOAS PRATICAS PARA NOMES DE VARIAVES
- USAR PADRÃO CAMEL CASE (1 LETRA MAIUSCULA)
- UTILIZE NOMES QUE FAZEM SENTIDO
- NÃO CRIE NOMES COM CARACTERES ESPECIAIS

- case sensitive A != a (diferente)
*/ 


$nome; // defino uma variavel sem valor
$variavelComValor = 'teste'; //variavel com valor

// tipos de dados
$varInteiro = 10;
$varReal = 10.5; //float - double - real
$varString = 'string aspas simples';
$varString2 = "string aspas duplas"; // \ barra  para escape aspas

$varBoleano = true; // true ou false

/* CONSTANTES
* REGRAS
- NÃO PODE SER INICIADA SEM VALOR
- VALOR NÃO PODE SER ALTERADO

BOAS PRATIDAS
- NOME EM CAIXA ALTA
- __CONFIG__

*/
//FORMA 1
const NOME = 10;

// define(NOME, VALOR)
define('NOME_CONSTANTE', 10);

/*
OPERADORES DE ATRIBUIÇÃO
= atribuição simples $variavel = algo
+- atribuição de adição 
-= atribuição de subtração
/* atribuição divisão
*= multiplicação
%= resto divisão


$atribuicao = 10;
echo $atribuicao."\n";

$atribuicao += 10;

echo $atribuicao."\n";

OPERADORES RELACIONAIS
== IGUAL A == A
=== VERIFICA TIPO E VALOR
!= DIFERENTE DE
!== DIFERENTE DE NO TIPO E VALOR
> MAIOR QUE
< MENOR QUE
>= MAIOR OU IGUAL
<= MENOR OU IGUAL

OPERADORES LOGICOS
- AND && - true  + true = true --- true + false = false
- OR || - true + false = true ----- false + false = false

*/


?>