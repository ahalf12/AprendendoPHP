<?php

class Pessoa{

	public $nome;

	public function falar(){

			return "O meu nome é: " . $this->nome;

	}


}

$Antony = new Pessoa();
$Antony->nome = "Antony Half";
echo$Antony->falar();
?>