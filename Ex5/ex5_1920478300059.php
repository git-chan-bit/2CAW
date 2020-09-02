<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exerc.05- Lista 01</title>
</head>
	<h2>Exercício 05 - Lista 01 - 2CAW</h2>
	<h3>Aluno: Chan</h3>
	<h4>Cálculo da média das notas dos alunos</h4>
<body>
	<?php

	$aluno= $_POST["aluno"]; //$aluno é a variável do Nome do aluno
	$nt1= $_POST['nt1']; 
	$nt2= $_POST['nt2'];
	$nt3= $_POST['nt3'];
	$media = ($nt1+$nt2+$nt3)/3;

	echo "Nome do aluno = " .$aluno;
	echo "<br><br>Média das notas = " .$media;

	?>

</body>
</html>