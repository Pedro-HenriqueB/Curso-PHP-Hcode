<?php 

$a = 10;
/*/////////////////////////////////////////////////
//Passagem de valor por referencia & antes do $
//altera o valor na memoria da variavel atraves
de seu endereco
////////////////////////////////////////////////*/
function trocaValor(&$b){
	$b += 50;
	return $b;
}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;

 ?>