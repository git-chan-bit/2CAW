<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exerc.10-Lista01</title>
</head>

<body style="background: green">

	<h1 style="color:yellow;">Exercício 10 - Lista 01 - 2CAW</h1>
	<h2 style="color: red;">Aluno: Chan</h2>

	<legend style="color:orange;">Loja mamão com açúcar</legend><br><br>

	<?php

	$compra= $_POST['compra'];
	$prestacao= $compra / 5;

	echo "<b>Total de 5 prestações de R$ </b>" .$prestacao;		
	
	?>

</body>
</html>