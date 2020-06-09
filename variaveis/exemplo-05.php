<?php

$nome = "Antony";

function teste() {

	global $nome;
	echo $nome;

}

function teste2(){

	$nome = "Variavel na function não interfere na variavel global.";
	echo $nome;

}

teste();

teste2();

?>