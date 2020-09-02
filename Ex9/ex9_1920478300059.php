<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Exerc.09 - Lista 01</title>

</head>

<body>

	<p1>Exercício 09 - Lista 01 - 2CAW</p1><br><br> 
	<p2>Aluno: Chan</p2><br><br><br>

	<div>

		<?php
		$deposito= $_GET["deposito"];	
		$porcent= $_GET['porcent'];
		$total= ($deposito * (1 + $porcent/100));
		echo "Depositado = R$ " .$deposito;
		echo "<br>Taxa percentual (%) =  " .$porcent;
		echo "<br>Total = R$ " .$total;

		?>
		
	</div>

</body>
</html>