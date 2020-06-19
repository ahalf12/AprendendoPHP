<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Antony Half");
$cad->setEmail("ahalf12@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

?>