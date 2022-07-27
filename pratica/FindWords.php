<?php 	

$poema = "O Menino Azul – Cecília Meireles
O menino quer um burrinho
para passear.
Um burrinho manso,
que não corra nem pule,
mas que saiba conversar.

O menino quer um burrinho
que saiba dizer
o nome dos rios,
das montanhas, das flores,
– de tudo o que aparecer.

O menino quer um burrinho
que saiba inventar histórias bonitas
com pessoas e bichos
e com barquinhos no mar.

E os dois sairão pelo mundo
que é como um jardim
apenas mais largo
e talvez mais comprido
e que não tenha fim.

(Quem souber de um burrinho desses,
pode escrever
para a Ruas das Casas,
Número das Portas,
ao Menino Azul que não sabe ler.)";

$titulo = substr($poema, 0, strpos($poema, '–'));

//substr ira selecionar uma parte do texto sendo substr(variavel com conteudo, inicio, fim);

//strpos encontra a posicao de um caractere e retorna um numero inteiro strpos(variavel, caractere);

echo $titulo;

 ?>