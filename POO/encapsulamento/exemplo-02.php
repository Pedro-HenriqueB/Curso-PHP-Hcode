<?php 

class Pessoa{
	public $nome = "Ramus Lerdorf";//public todos enxergam
	protected $idade = 48;//protected apenas dentro da classe e herdeiro
	private $senha = "123456";//private apenas dentro da classe

	public function verDados(){
		echo $this->nome . '<br>';
		echo $this->idade . '<br>';
		echo $this->senha . '<br>';
	}
}

class Programador extends Pessoa{
	public function verDados(){
		echo get_class($this) . '<br>';
		echo $this->nome . '<br>';
		echo $this->idade . '<br>';
		echo $this->senha . '<br>';
	}
}


$objeto = new Programador();
//echo $objeto->senha . "<br>";

$objeto->verDados();
?>