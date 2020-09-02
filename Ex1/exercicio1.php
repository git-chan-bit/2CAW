<!DOCTYPE html>
<html lang="pt-br"><head>
	<meta charset="utf-8">
	<title>.::Programação Web::.</title>
</head>
<body>
	<br><br><br><br>
	<h1>Aula HTML - 2CAW</h1><hr><br>
	<h5>Aluno: Meng</h5>
			<h3>1º exercício</h3>
			
	<div class="conteudo">
		<fieldset> <!-- linha de contorno para o conteudo -->
			<legend>Calculadora que soma dois números.</legend>
				
				<?php
				//o metodo POST recebe os valores digitados que são as variaveis $valor1 e $valor2 
				$valor2= $_POST['valor2'];
				$valor1= $_POST['valor1'];
				$total = $valor1 + $valor2; 
				echo "Soma = $total"; 
				?>

		</fieldset>
	</div>
	
	<footer>
		<br><br><br>
		<h4>rodapé</h4>
	</footer>


</body></html>