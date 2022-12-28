<?php

////TIPOS BASICOS///////////////

$nome = "Hcode";
$site = 'www.hcode.com.br';
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
////////////////////////////////



/////////TIPOS COMPOSTOS///////

$frutas = array("abacaxi","laranja","manga");

//echo $frutas[0]; // de 0 a 2


$nascimento = new Datetime();


//var_dump($nascimento);


/////////TIPOS ESPECIAIS///////

$arquivo = fopen("exemplo03.php","r");


//var_dump($arquivo);


$nulo = NULL; // não aloca memoria

$vazio = "";






?>