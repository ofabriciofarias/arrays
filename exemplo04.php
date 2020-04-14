<?php
//JSON - JavaScript object notation
//Garante a interoperabilidade do sistema
//Interoperabilidade: Permite que o sistema seja consumido em diferentes sistemas programados em diferentes linguagens
//Vamos aprender a trabalhar com o JSON

//JSON enconde
//JSON decode

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'Fabricio',
	'idade' => 32

));

array_push($pessoas, array(
	'nome' => 'Tiago',
	'idade' => 29
));

echo json_encode($pessoas);


?>