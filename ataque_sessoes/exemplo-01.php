<?php

session_start();

//Depois de verificar login e senha reinicie o ID da sessao
session_destroy();

session_start();//necessario startar a sessao novamente
session_regenerate_id();


echo session_id();

?>