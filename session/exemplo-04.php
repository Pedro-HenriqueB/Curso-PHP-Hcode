<?php 

session_id('qd5odc62beb3plu9f4r24a7237');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

 ?>