<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 4 - 2CAW</title>
</head>
	<h1>Exerc. 04- 2CAW</h1><hr><br>
	<h2>Aluno: Chan</h2>
	<h4>3º exercício</h4>

	<body>
		<br>
		
			<legend>Cálculo do Salário com a comissão de 15%: </legend><br>
				
				<?php

				$vendedor= $_POST["vendedor"]; //$vendedor é a variavel do nome do vendedor
				//o metodo POST recebe os valores digitados do index3.html que são as variaveis $valor1 e $valor2 
				$valor1= $_POST['valor1'];
				$valor2= $_POST['valor2'];
				$saltot = $valor1 + (0.15 * $valor2);
				echo "Nome do vendedor = " .$vendedor;
				echo "<br>Salário Fixo = " .$valor1; 
				echo "<br>Total de vendas = " .$valor2;
				echo "<br>Salário Total = "  . $saltot;
				
				?>

	</body>
</html>