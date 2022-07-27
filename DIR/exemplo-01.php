<?php

$name = "images";
if(!is_dir($name)){
    mkdir($name);
    echo "Diretorio $name Criado com sucesso!";
} else {
    rmdir($name);
    echo "Ja existe o diretorio: $name foi removido!";
}
