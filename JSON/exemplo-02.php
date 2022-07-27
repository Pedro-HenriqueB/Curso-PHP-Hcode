<?php 

$json = '[{"nome":"Joao","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true);//se nao colcoar o true ele sera transformado em objeto nao em um array!

var_dump($data);

 ?>