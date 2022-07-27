<?php 
////////O NOME DESSE RECURSO E: DECLARACAO DE TIPOS ESCALARES//////////
/////// ONDE TODOS OS VALORES SERAO DO MESMO TIPO           //////////
//////  Apos os : indica qual eh o tipo do valor que sera retornado//
function soma(float ...$valores):float{
	return array_sum($valores);	
}

echo var_dump(soma(2, 2));
echo '<br>';

echo soma(25, 33);
echo '<br>';

echo soma(1.5, 3.2);
echo '<br>';
 ?>