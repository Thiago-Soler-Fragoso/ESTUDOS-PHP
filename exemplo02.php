<?php 





//PHP case sensetive 

$nome1 = "Thiago";
/*$1nome = "N�o pode";
*/

$sobrenome = "Soler" . " " . "Fragoso";


$nomeCompleto = $nome1 . " " . $sobrenome; // concatena��o

echo $nomeCompleto;


//echo $nome1;

echo "<br/>" ;// pular linha


//como limpar variavel

//unset($nome1);

//echo $nome1;

//vai dar erro Notice: Undefined variable: nome1 in C:\xampp\htdocs\variaveis\exemplo02.php on line 26


if (isset($nome1)){  //saber se ela existe

	echo $nome1;

}

?>