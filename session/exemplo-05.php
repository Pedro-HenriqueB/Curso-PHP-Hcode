<?php 

require_once("config.php");

echo session_save_path();

echo"<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()) {
	case PHP_SESSION_DISABLED:
	echo "As sessoes estao desabilitadas!";
	break;

	case PHP_SESSION_NONE:
	echo "As sessoes estao habilitadas, mas nenhuma sessao existe!";
	break;

	case PHP_SESSION_ACTIVE:
	echo "As sessoes estao habilitadas, e ha uma sessao existente";
	break;
}

 ?>