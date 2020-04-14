<?php
//Exemplo de banco de dados com todas as variáveis em uma única constante.

define("BANCO_DE_DADOS", [
	'127.0.0.1',
	'root',
	'password',
	'banco_teste'
], true); //Este true deixa como sem ser canse sensitive. Aí pode ser maiúsculo ou minúsculo sem o ", true" funciona, mas seria aceito somente maiúsculo como foi definida.

//Depois pode usar para conectar no banco de dados.

print_r(BANCO_DE_DADOS);
?>