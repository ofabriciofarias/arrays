
<?php


$dados = array();

array_push($dados, array(
	'id_paciente' => 1,
	'id_pergunta' => 0,
	'id_resposta' => 1
));

array_push($dados, array(
	'id_paciente' => 2,
	'id_pergunta' => 0,
	'id_resposta' => 1
));

array_push($dados, array(
	'id_paciente' => 3,
	'id_pergunta' => 0,
	'id_resposta' => 0
));

array_push($dados, array(
	'id_paciente' => 1,
	'id_pergunta' => 0,
	'id_resposta' => 0
));

array_push($dados, array(
	'id_paciente' => 2,
	'id_pergunta' => 0,
	'id_resposta' => 1
));

array_push($dados, array(
	'id_paciente' => 3,
	'id_pergunta' => 1,
	'id_resposta' => 0
));
//Dobrando o número de respostas
array_push($dados, array(
	'id_paciente' => 1,
	'id_pergunta' => 1,
	'id_resposta' => 1
));

array_push($dados, array(
	'id_paciente' => 2,
	'id_pergunta' => 1,
	'id_resposta' => 1
));

array_push($dados, array(
	'id_paciente' => 3,
	'id_pergunta' => 2,
	'id_resposta' => 0
));

array_push($dados, array(
	'id_paciente' => 3,
	'id_pergunta' => 2,
	'id_resposta' => 1
));

array_push($dados, array(
	'id_paciente' => 1,
	'id_pergunta' => 2,
	'id_resposta' => 1
));

array_push($dados, array(
	'id_paciente' => 3,
	'id_pergunta' => 1,
	'id_resposta' => 1
));


$paciente = 1;
$respostaCorreta = 1;
$respostaIncorreta = 0;
$qtdAcertos = array(0,0,0,0,0,0,0,0,0,0);
$qtdErros = array(0,0,0,0,0,0,0,0,0,0);
$mediaAcertos = array(0,0,0,0,0,0,0,0,0,0);

$qtdAcertosGerais = array(0,0,0,0,0,0,0,0,0,0);
$qtdErrosGerais = array(0,0,0,0,0,0,0,0,0,0);
$mediaAcertosGerais = array(0,0,0,0,0,0,0,0,0,0);

	foreach ($dados as $key => $value) {

		if($dados[$key]["id_paciente"] == $paciente && $dados[$key]['id_resposta'] == $respostaCorreta){
			$qtdAcertos[$dados[$key]['id_pergunta']] += 1;
			echo "Quantidade de Acertos = " . $qtdAcertos[$dados[$key]['id_pergunta']] . '<br>';

		}elseif($dados[$key]["id_paciente"] == $paciente && $dados[$key]['id_resposta'] == $respostaIncorreta){
			$qtdErros[$dados[$key]['id_pergunta']] += 1;
			echo "Quantidade de Erros = " . $qtdErros[$dados[$key]['id_pergunta']] . '<br>';

		}

		if($dados[$key]['id_resposta'] == $respostaCorreta){
			$qtdAcertosGerais[$dados[$key]['id_pergunta']] += 1;
			echo "Quantidade de Acertos Gerais = " . $qtdAcertosGerais[$dados[$key]['id_pergunta']] . '<br>';

		}elseif($dados[$key]['id_resposta'] == $respostaIncorreta){
			$qtdErrosGerais[$dados[$key]['id_pergunta']] += 1;
			echo "Quantidade de Erros Gerais = " . $qtdErrosGerais[$dados[$key]['id_pergunta']] . '<br>';

		}
		
	}

	echo "Paciente " . $paciente . "<br>";
	foreach ($qtdAcertos as $key => $value) {
		echo "Quantidades Totais por Paciente de Acertos para a Questão " . $key . " = " . $value . "<br>";
	}

	foreach ($qtdErros as $key => $value) {
		echo "Quantidades Totais por Paciente Erros para a Questão " . $key . " = " . $value . "<br>";
	}

	echo "Erros Gerais <br>";
	foreach ($qtdAcertosGerais as $key => $value) {
		echo "Quantidades Gerais de Acertos para a Questão " . $key . " = " . $value . "<br>";
	}

	foreach ($qtdErrosGerais as $key => $value) {
		echo "Quantidades Gerais de Erros para a Questão " . $key . " = " . $value . "<br>";
	}

	//Media do Paciente por questão
	foreach ($qtdAcertos as $key => $value) {
		if(($qtdAcertos[$key] + $qtdErros[$key]) != 0){
		 	$mediaAcertos[$key] = $qtdAcertos[$key]/($qtdAcertos[$key] + $qtdErros[$key]);
		 }

		 if(($qtdAcertosGerais[$key] + $qtdErrosGerais[$key]) != 0){
		 	$mediaAcertosGerais[$key] = $qtdAcertosGerais[$key]/($qtdAcertosGerais[$key] + $qtdErrosGerais[$key]);
		 }
		 echo "Media de Acertos do Paciente = " . $mediaAcertos[$key] . "<br>";
		 echo "Media de Acertos Gerais = " . $mediaAcertosGerais[$key] . "<br>";
	}


?>
