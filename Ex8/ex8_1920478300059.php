<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exerc 08 - Lista 01 - 2CAW</title>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
</head>

<body>
	<h1>Exercício 08 - Lista 01 - 2CAW</h1>
	<h2>Aluno: Chan</h2>
	<p>Cotação Dólar x Real.</p>

	<?php

	$dolar= $_GET["dolar"];
	$qreal= $_GET["qreal"];
	$us = $qreal / $dolar;

	echo "Cotação do dólar: " .$dolar;
	echo "<br> Quantia em dólar: " .$us;

	?>

		

	
</body>
</html>