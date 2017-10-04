<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Atividade 6</title>
	</head>
	<body>
		<?php 
			echo '1. Abertura e fechamento das tags do PHP; <br/>';
			echo 'As tagas <?php ?> foram usadas para abrir essas frases <br/> <br/>';
		 ?>

		 <?php 

		 	echo "2.Comando if; <br/>";
		 	echo 'Se 2+2 for igual 4 será impresso "É IGUAL" <br/>';
		 	if ((2+2) == 4){
		 		echo 'É IGUAL <br/> <br/>';
		 	}

		  ?>

		 <?php 

		 	echo "3 .Comando if com else; <br/>";
		 	echo 'Se 2+3 for diferente de 4 será impresso "É DIFERENTE" <br/>';
		 	if ((2+3) == 4){
		 		echo 'É IGUAL <br/> <br/>';
		 	}else {
		 		echo 'É DIFERENTE <br/> <br/>';
		 	}

		  ?>

		  <?php 

		 	echo "4 .Comando if aninhado com outro if; <br/>";
		 	echo 'Se 8 for maior que 6 ele entrará na condição if, dentro da condição caso seja menor que 10 ele entrará em outra <br/>';
		 	if (8 > 6){
		 		if (8 < 10) {
		 			echo 'È MENOR QUE 10 <br/> <br/>';
		 		}
		 	}

		  ?>

		  <?php 

		 	echo "5 .Utilização do comando if em conjunto com HTML; <br/>";
		 	echo 'Se 7 for maior que 5 ele imprimirá MAIOR QUE 6, se não, MENOR QUE 6. <br/>';
		 	if (7 > 5){
		  ?>
		  	<h3>É MAIOR QUE 6</h1>
			<?php 

			}else{
		?>
			<h3>É MENOR QUE 6</h1>
		<?php }; ?>

		<?php 

		 	echo "6 . Utilização de variáveis; <br/>";
		 	echo 'Vai imprimir a soma de "$a" (10) + "$b" (20) <br/>';
		 	
		 	$a = 10;
		 	$b = 12;
		 	$total = $a + $b;
		 	echo $total; 

		 	echo "<br/> <br/>";

		  ?>

		 <?php 

		 	echo "7 . Criação de funções; <br/>";
		 	echo 'Vai imprimir a soma de "$a" (10) + "$b" (20) <br/>';
		 	
		 	function subtracao ($a, $b){
		 		global $msg;
		 		return $msg.($a - $b).'! <br/> <br/>';
		 	}

		 	$msg = 'A Subtracao é ';
		 	echo subtracao(9, 6);

		  ?>

		<?php 
			$refrigerante = 'Pepsi';
		 	echo "8 .Utilização de sintaxe simples e complexa em strings; <br/>";
		 	echo "Sitaxe simples:  {$refrigerante}S <br/><br/>";

		  ?>

		  <?php 
		 	echo "9. Concatenação de variáveis; <br/>";

		 	$word = "Engenharia";
		 	$word2 = 'Software';

		 	echo "Concatenação: ".$word." de ".$word2." <br/><br/>";

		  ?>

		  <?php 
		 	echo "10. Utilização do operador cast e também o comando settype; <br/>";

		 	$var1 = "6ABC";
		 	$var2 = false;

		 	echo settype($var1, "integer");
		 	echo (int) $var2;
		 	echo "<br/> <br/>"

		  ?>

		  <?php 
		 	echo "11. Criação, e exibição de arrays; <br/>";

		 	$vetor = array(1 => 20,
		 					2 => 30,
		 					"abc" => "agua");

		 	echo "Posição 1: ".$vetor[1];
		 	echo "<br/>Posição 2: ".$vetor[2];
		 	echo "<br/>Posição 'abc': ".$vetor['abc']."<br/> <br/>";


		  ?>

		  <?php 
		 	echo "12. Utilização do comando while para percorrer um array; <br/>";
		 	$cont = 0;
		 	$vetor = array(0 => 20,
		 					1 => 30,
		 					2 => 40);

		 	while  ($cont < 3){
		 		echo "Posição ".$cont.": ".$vetor[$cont]."<br/>";
		 		$cont++;
		 	}

		 	echo "<br/>";


		  ?>

		  <?php 
		 	echo "13. Utilização do comando for para percorrer um array; <br/>";
		 	$cont = 0;
		 	$vetor = array(1 => 210,
		 					2 => 310,
		 					3 => 410);

		 	for($cont = 1; $cont < 4; $cont++){
		 		echo "Posição ".$cont.": ".$vetor[$cont]."<br/>";
		 	}

		 	echo "<br/>";


		  ?>

		  <?php 
		 	echo "14. Utilização do comando foreach para percorrer um array; <br/>";
		 	$cont = 0;
		 	$vetor = array(1 => 10,
		 					2 => 11,
		 					3 => 12);

		 	foreach ($vetor as $value){
		 		echo "Posição ".$cont.": ".$value."<br/>";
		 		$cont++;
		 	}

		 	echo "<br/>";


		  ?>

		  <?php 
		 	echo "15. Criação e utilização de uma constante; <br/>";
		 	define("HELLO", "OLÁ, MUNDO!");

		 	echo HELLO."<br/><br/>";


		  ?>

		  <?php 
		 	echo "16. Utilização de operadores: aritméticos, de comparação, lógicos, de incremento e decremento; <br/>";
		 	$valor1 = 3;
		 	$valor2 = 3;

		 	echo "OPERADOR ARITMÉTICOS: $valor1 * $valor2 = ".($valor1*$valor2)."<br/>";

		 	echo "OPERADOR DE COMPARAçÃO: Se ambas variáveis são iguais e do mesmo tipo, vai imprimir SÃO IGUAIS <br/>";
		 	if ($valor1 === $valor2){
		 		echo "SÃO IGUAIS <br/>";
		 	}

		 	echo "OPERADOR LÒGICO: se ambas condições forem iguais, vai imprimir DEU CERTO 	<br/>";
		 	if ($valor1 == 3 && $valor2 == 3){
		 		echo "DEU CERTO <br/>";
		 	}

		 	$valor1++;
		 	echo "OPERADOR DE INCREMENTO: 3 vira: ".$valor1."<br/> <br/>";

		  ?>

		  <?php 
		 	echo "17. Utilização do operador ternário; <br/>";
		 	
		 	$nota = 7;
			echo ($nota >= 6) ? "Você foi aprovado!<br>" : "Você reprovou!";
			echo "<br/>";

		  ?>

		  <?php 
		 	echo "18. Utilização das seguintes funções para arrays: sort(), count(), print_r(), unset(), shuffle(), in_array(); <br/>";
		 	
		 		$vetor = array(10, 20, 30);
		
				print_r($vetor);
				echo "<br/>";
				sort($vetor);
				echo '<br/>';
				echo count($vetor);
				echo '<br/>';

				unset($vetor[0]);
				print_r($vetor);
				echo '<br/>';

				unset($vetor);

				$vetor = array(10, 20, 30);
				shuffle($vetor);
				print_r($vetor);
				echo '<br/>';

				echo in_array("2", $vetor);
				echo '<br/><br/>';
		  ?>

		  <?php 
		 	echo "19. Utilização das seguintes funções para strings: substr(), strrpos(), strpos(), trim(), str_replace(), str_len(), strtolower(), strtoupper(); <br/>";
		 	
		 		$word = "Engenharia de Software";

				echo substr($word, 6);
				echo '<br/>';

				echo strlen($word);
				echo '<br/>';
				echo strtolower($word);
				echo '<br/>';
				echo strtoupper($word);
				echo '<br/><br/>';

		  ?>

		  <?php 
		 	echo "20. Utilização das seguintes funções gerais: empty(), explode(), impode(), number_format(), rand(), date(); <br/>";
		 	
		 		$valor = 15;

				if(!empty($valor))
					echo "A variável valor não está vazia.<br/>";

				echo rand(0, 100);
				echo '<br>';

				echo date("d/m/Y - H:i:s");
				echo '<br>';

		  ?>
		
	</body>
</html>