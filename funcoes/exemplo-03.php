<?php 
/*//////////////////////////////////////////
	PARAMETROS OBRIGATORIOS SEMPRE DO LADO
	ESQUERDO!
	A NAO SER QUE SEJA NECESSARIO ALTERAR
	A ORDEM DOS PARAMETROS!
/////////////////////////////////////////*/

function ola($texto="Mundo", $periodo = "Bom dia"){
	return "Ola $texto! $periodo!<br>";
}

/*/////////////////////////////////////////
		A ORDEM DOS ARGUENTO DA FUNCAO 
		SAO DE EXTREMA IMPORTANCIA
		CASO O SEGUNDO ARGUMENTO SEJA
		OBRIGATORIO E O PRIMEIRO NAO
		ISSO IRA GERAR UM ERRO!
////////////////////////////////////////*/

echo ola("Mundo", "Bom dia");
echo ola("", "Boa Noite");
echo ola("Glaucio", "Boa Tarde");
echo ola("Joao", "");

 ?>