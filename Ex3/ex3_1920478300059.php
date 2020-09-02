<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 3 - 2CAW</title>
</head>
	<h1>Exerc. 03- 2CAW</h1><hr><br>
	<h2>Aluno: Chan</h2>
	<h4>3º exercício</h4>

	<body>
		<br>
		
			<legend>Cálculo do consumo:</legend><br>
				
				<?php
				//o metodo POST recebe os valores digitados do index3.html que são as variaveis $valor1 e $valor2 
				$valor1= $_POST['valor1'];
				$valor2= $_POST['valor2'];
				$consumo = $valor1 / $valor2; 
				echo "Consumo = "  . $consumo; 
				?>

	</body>
</html>