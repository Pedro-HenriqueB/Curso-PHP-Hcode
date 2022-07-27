<?php 
//IF, IFELSE e ELSE
echo "Pratica IF, IFELSE e ELSE!<br>";
$previsaoDoTempo = "ensolarado";

if($previsaoDoTempo == "chovendo") {
	echo "Tempo chuvoso, levar guarda chuva!";

} else if ($previsaoDoTempo == "nublado") {
	echo "O tempo esta nublado!";

} else {
	echo "O tempo esta ensolarado, levar protetor solar!";
}

echo "<br><hr><br>";

//FOREACH
echo "Pratica FOREACH!<br>";
$cores = array("vermelho", "amarelo", "azul", "preto");

foreach ($cores as $cor) {
	echo $cor . "<br>";
}

echo "<br><hr><br>";

//FOR
$multa = 30;
$saldo = 520;
echo "Pratica FOR!<br>";
echo "Voce tem 10 multas de R$ 30,00 e tem R$520,00 de saldo.<br>";
for ($i=0; $i < 10; $i++) { 
	$saldo-=$multa;
	echo "Uma multa de R$ 30,00 foi descontada seu saldo agora e de: " . $saldo . "<br>";
}

echo "<br><hr><br>";

//WHILE
$agua = 1000;
$beber = 200;
echo "Pratica WHILE!<br>";
echo "Voce tem uma garrafa com 1Litro de agua.<br>";
while($agua > 0) {
	$agua-=$beber;
	echo "Voce bebeu " . $beber . " de agua e agora tem " . $agua . "ml de agua.<br>";
}

echo "<br><hr><br>";

//DO WHILE
$velocidade = 10;
$aceleracao = 2;
echo "Pratica DO WHILE!<br>";
echo "Acelerar o carro ate atingir a velocidade correta.<br>";

do{
	echo "Voce esta a " . $velocidade . "Km por hora!<br>";
	$velocidade += $aceleracao;
} while($velocidade <= 60);

 ?>