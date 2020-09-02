<!DOCTYPE html>
<html>
<head>
	<title>Exercício07 - Lista01</title>
	<meta charset="utf-8">
</head>
<body>

	<h2>>Exercício07 - Lista01 - 2CAW</h2><br><br>
	<h3>Aluno: Chan</h3><br>
	<h4>Converter temperatura ºC em F</h4><br>

	</body>

		<?php

		$tCelsius= $_GET['tCelsius'];
		$frh = (9/5*$tCelsius) + 32;

		echo "Temperatura em Fahrenheit:  " .$frh;

		?>



</body>
</html>


