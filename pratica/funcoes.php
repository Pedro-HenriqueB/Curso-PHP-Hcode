<?php 

////FUNCAO QUE RETORNA FRASE E USA A FUNCAO STRLEN////////
function frase(){
	return "Uma frase qualquer<br>";
}

frase();
$variavel = frase();
echo strlen(frase());
echo '<br>';
echo strlen($variavel) . '<br>';


echo '<hr>';



/////FUNCAO QUE RETORNA UM SALARIO E EH IMPRESSO COM UMA MULTIPLICACAO PARA CERTAS PESSOAS//////////
function salario(){
	return 1000.99;
}

echo salario() . '<br>';

$pessoas = array(
	'Jose', 'Maria', 'Reginaldo',
	'Cara do Cigarro', 'J', 'Flint'
);

foreach ($pessoas as $pessoa){
	switch ($pessoa) {
		case $pessoa == 'Maria':
		echo "$pessoa recebeu:  R$" . number_format(salario()*5) . '<br>';
		break;

		case $pessoa == 'Cara do Cigarro':
		echo "$pessoa recebeu:  R$" . number_format(salario()*0.02) . '<br>';
		break;

		case $pessoa == 'J':
		echo "$pessoa recebeu:  R$" . number_format(salario()*0.3) . '<br>';
		break;

		default:
		echo "$pessoa recebeu:  R$" . number_format(salario()) . '<br>';
	}
}

echo '<hr>';

/*///////FUNCOES COM PARAMETROS////////////////////////////////////////////////////////////////////





function mensagem($parametro = "Parametro 1", $parametro2){
	return "Uma mensagem retornada da funcao mensagem com o parametro que comtem: $parametro<br>";
}

echo mensagem("Um parametro qualquer!"); 





NAO FUNCIONA PORQUE A ORDEM DOS PARAMETROS ESTA ERRADA
////////////////////////////////////////////////////////////////////////////////////////////////*/

/////////FUNCAO COM OS PARAMETROS CORRETOS///////////////////////////////////////////////////////

function mensagem($parametro1, $parametro2 = "Parametro 2 passado pelo parametro da propria funcao!"){
	return "Uma mensagem retornada da funcao mensagem com o parametro que comtem: $parametro1, parametro 2: $parametro2<br>";
}

echo mensagem("Parametro 1 passado pela chamada da funcao!");

//Substituindo valor padrao do parametro

echo mensagem("Parametro 1 passado na chama da funcao!  ", "Parametro 2 substituido na chamada da funcao!");


echo '<hr>';


/*/////FUNCAO FUNC_GET_ARGS////////////////////////////////////////

DEVE SER USADA EM CONJUNTO COM A FUNCAO FUNC_NUM_ARGS PARA ENCONTRAR
OS INDICES DE CADA ARGUMENTO!

EXEMPLO NO SITE PHP.NET

///////////////////////////////////////////////////////////////*/


function ola(){
	$numargs = func_num_args();
	$arg_list = func_get_args();
	for($i = 0; $i < $numargs; $i++){
		echo "Argumento $i eh: " . $arg_list[$i] . '<br>';
	}
	

}

ola("Isso eh uma string", 20);

echo '<hr>';




/*///////////////FUNCAO QUE MUDA O VALOR DA VARIAVEL NA MEMORIA////////////////
////////////*/

function mudaValorReferencia(&$b){
	$b += 10;
	return $b;
}

function mudaValor($b){
	$b += 10;
	return $b;
}

$a = 20;
echo "Variavel A = $a<br>";
echo "Alterando valor por referencia, Agora a variavel A vale " . mudaValorReferencia($a) . '<br>';

echo "Agora mudando o valor por valor simplesmente, sem referencia, A agora vale: " . mudaValor($a) . '<br>';
echo "Mas continua contendo o valor da variavel A como: $a<br>";

echo '<hr>';




/*//////////////////////////USANDO A FUNCAO GETTYPE/////////////////////
/*/////////////////////////////////////////////////////////////////////
function encontraInteiro($entradas){
	foreach($entradas as $entrada){
		if(gettype($entrada) === 'integer'){
			echo "O valor de entrada eh: $entrada<br>";
			$entrada += 10;
			echo "Somando +10 ficou: $entrada<br>";
		}else{
			echo " O valor de entrada nao eh inteiro e sim " . gettype($entrada) . " contendo: $entrada<br>";
		}
	}
}

$numeros = array(10, 20, 30, 40, 70, 90, 45, 35, 'abacaxi', 'Tomate', 'Cachorro quente de Frango');
encontraInteiro($numeros);

echo '<hr>';

////////O NOME DESSE RECURSO E: DECLARACAO DE TIPOS ESCALARES//////////
/////// ONDE TODOS OS VALORES SERAO DO MESMO TIPO           //////////

function soma(int ...$valores){
	return array_sum($valores) . '<br>';
}

echo soma(25,25);
echo soma(30, 30, 30);
echo soma(45, 45, 10);

echo '<hr>';


////////O NOME DESSE RECURSO E: DECLARACAO DE TIPOS ESCALARES//////////
/////// ONDE TODOS OS VALORES SERAO DO MESMO TIPO           //////////
//////  Apos os : indica qual eh o tipo do valor que sera retornado//

function soma2(float ...$valores):float{
	return array_sum($valores);
	//return array_sum($valores) . '<br>'; caso concatenar com '<br>' ira retornar como uma string!
}

echo var_dump(soma2(30, 30));
echo '<br>';
echo var_dump(soma2(30, 25.2));
echo '<br>';

