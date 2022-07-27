<?php 

echo "FUNCOES BASICAS DE DATE E TIMESTAMP";
echo '<br>';
echo date("l, d/m/Y H:i:s:u A e I");
echo '<br>';
echo time();

echo '<hr>';

echo "FUNCAO DATE JUNTAMENTE COM A FUNCAO STRTOTIME";
echo '<br>';
$dt = strtotime("+1 week");
echo Date("l, d/m/Y", $dt);

echo '<hr>';

echo "SET LOCALE E STRFTIME";
echo '<br>';
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
$de = 'do ano de';
//echo ucwords(strftime("O dia da semana eh %A do mes de %B $de %Y"));
echo strftime("O dia da semana eh " . ucwords(strftime("%A")) . " do mes de " .
 ucwords(strftime("%B")) . " $de %Y");

echo '<hr>';

echo "UTILIZANDO O OBEJTO DATETIME";
echo '<br>';
$dt = new DateTime();
echo $dt->format("d/m/Y H:i:s");

echo '<hr>';

echo "UTILIZANDO O OBJETO DATETIME JUNTAMENTE COM DATEINTERVAL E FORMAT";
echo '<br>';
$dt2 = new DateTime();
$periodo = new DateInterval("P15D");
echo $dt2 -> format("d/m/Y H:i:s");
$dt2 -> add($periodo);
echo '<br>agora a data alterada pelo DateInterval Periodo de 15 Dias<br>';
echo $dt2 -> format("d/m/Y H:i:s");

 ?>