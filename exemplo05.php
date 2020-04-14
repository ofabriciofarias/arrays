<?php
//JSON decodificação

$json = '[{"nome":"Fabricio","idade":32},{"nome":"Tiago","idade":29}]';

$data = json_decode($json, true);

var_dump($data);

?>