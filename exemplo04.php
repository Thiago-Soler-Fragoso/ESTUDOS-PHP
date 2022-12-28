<?php
///////////////VARIAVEIS PRO DEFINIDAS///////////////


//$nome = $_GET["a"];
// todo valor do get será string, caso precise de um int deverá ser realizada uma conversão.

$nome = (int)$_GET["a"];



//var_dump($nome);

//inicia pelo protocolo HTTPS
//depois dominio sss.com.br
//depois o path 
//depois a query string
//depois tem rash #


$ip = $_SERVER["REMOTE_ADDR"]; // pega informações do ambiente (Servidor)
$ip = $_SERVER["SCRIPT_"]; // pega informações da pagina que estão acessando (Servidor)

echo $ip;

?>