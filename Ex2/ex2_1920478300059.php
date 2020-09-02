<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Ex2-calculadora basica-2CAW</title>
</head>

<body>

	<?php
// o metodo POST recebe os valores digitados que são as variaveis $val1 e $val2 
	$val1=$_POST['val1'];
	$val2=$_POST['val2'];
	$sinal=$_POST['operacao'];
	$total=0;
/* switch: podemos usar diversas condições. Se o valor da variável estiver dentro de um dos cases, o switch vai executar o código que estiver ali;  break serve para parar a execução;  default: executa um trecho do código que não tenha seu valor definido em case. Exemplo: echo "Ocorreu um erro, digite novamente.";  */ 
switch ($sinal)
{
	case 'soma': $total = $val1 + $val2; 
		echo "Resultado = " .$total; //OBS: a variável .$total é precedido de ponto
		break;
	case 'subtracao': $total = $val1 - $val2; 
		echo "Resultado = " .$total; 	
		break;
	case 'multiplicacao': $total = $val1 * $val2; 
		echo "Resultado = " .$total; 
		break;	
	case 'divisao': $total = $val1 / $val2; 
		echo "Resultado = " .$total; 
		break;	
	default: 
		echo "Dados ou operação inválida.";	
	}
	?>
	
</body>
</html>