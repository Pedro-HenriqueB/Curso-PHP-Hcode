<?php 

class Pessoa {

	public $nome;//Atributo
	public function falar(){//Metodo

		return "O mu nome e " . $this->nome;
	}

}

$pedro = new Pessoa();
$pedro->nome = 'Pedro Henrique';
echo $pedro->falar();

 ?>