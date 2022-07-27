<?php 

require_once("config.php");

unset($_SESSION["nome"]); //session_unset($_SESSION["nome"]); nao funciona eh preciso usar unset(variavel); para apagar variavel especifica ou session_unset(); sem parametros para apagar todas as sessoes.

echo $_SESSION["nome"];

 ?>