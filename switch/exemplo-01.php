<?php 

$diaDaSemana = 8;//date("w");

switch($diaDaSemana) {
	case 0:
	echo "Domingo";
	break;

	case 1:
	echo "Segunda-feira";
	break;
	
	case 2:
	echo "Terca-feira";
	break;

	case 3:
	echo "Quartafeira";
	break;

	case 4:
	echo "Quinta-feira";
	break;

	case 5:
	echo "sexta-feira";
	break;

	case 6:
	echo "Sabado";
	break;

	default:
	echo "Data invalida!";
	break;
}

 ?>